<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use App\Models\Group;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Grid;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = '사용자 관리'; // Custom label in Korean
    protected static ?string $navigationGroup = 'User';


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Section::make('사용자 정보')
            ->schema([
                Grid::make(3)
                ->schema([
                    Forms\Components\TextInput::make('username')
                        ->label('사용자 ID')
                        ->required()
                        ->maxLength(20),
                    Forms\Components\TextInput::make('phone')
                        ->label('연락처')
                        ->helperText('11자리: 0108888XXXX')
                        ->tel()
                        ->required()
                        ->maxLength(11),
                    Forms\Components\TextInput::make('name')
                        ->label('이름')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('email')
                        ->label('이메일')
                        ->email()
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Select::make('gender')
                        ->label('성별') // This is "Gender" in Korean
                        ->options([
                            '남' => '남', // Male
                            '여' => '여', // Female
                        ])
                        ->required(),
                    Forms\Components\TextInput::make('birth')
                        ->label('생년월일')
                        ->helperText('8자리 생년월일 : 19990510')
                        ->maxLength(8),
                ]),
                Grid::make(2)
                ->schema([
                    Forms\Components\Select::make('group_id') // Ensure this matches the column in your database
                    ->helperText('몇기인지 선택하세요.')
                    ->label('기수')
                    ->options(Group::all()->pluck('name', 'id')) // Use 'id' as the key
                    ->required(),
                    Forms\Components\Select::make('position')
                        ->label('직분')
                        ->options([
                            '학생' => '학생', //학생
                        ])
                        ->required(),
                    Forms\Components\TextInput::make('password')
                        ->label('비밀번호 변경')
                        ->password()
                        ->required(fn ($livewire) => $livewire instanceof Pages\CreateUser)
                        ->maxLength(255)
                        ->dehydrateStateUsing(fn ($state) => $state ? bcrypt($state) : null)
                        ->dehydrated(fn ($state) => filled($state)), // Only save the password if it's filled
                    Forms\Components\TextInput::make('referrer')
                        ->label('추천인')
                        ->maxLength(255)
                ]),
                Forms\Components\TextInput::make('address')
                    ->label('주소')
                    ->maxLength(40),
                Forms\Components\TextInput::make('address_detail')
                    ->label('상세주소')
                    ->maxLength(40),
                Select::make('roles')
                    ->multiple()
                    ->relationship('roles', 'name')
                    ->preload(),
                Select::make('permissions')
                    ->multiple()
                    ->relationship('permissions', 'name')
                    ->preload()
                    
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('이름')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birth')
                    ->label('생년월일')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->label('성별'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('연락처')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('이메일')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->label('주소')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->label('직분')
                    ->searchable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('login_date')
                    ->label('로그인 날짜')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->date(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->date()
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make()
                ->label('수정'),
                DeleteAction::make()
                ->label('삭제'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                    ->label('선택 삭제'),
                ]),
            ])
            ->defaultSort('updated_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    //https://filamentphp.com/docs/2.x/admin/resources/widgets

}
