<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GraduateResource\Pages;
use App\Filament\Resources\GraduateResource\RelationManagers;
use App\Models\Graduate;
use App\Models\Group;
use App\Models\User;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;// Correct import
use Filament\Tables\Table;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Actions\EditAction;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Resources\Components\Tab;
use Filament\Forms\Components\DateTimePicker;
use Livewire\Livewire;

class GraduateResource extends Resource
{
    protected static ?string $model = Graduate::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = '졸업자 관리'; // Custom label in Korean
    protected static ?string $navigationGroup = 'User';
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('year')
                    ->helperText('4자리 숫자 : 2024')
                    ->label('졸업년도')
                    ->placeholder('2024')
                    ->numeric()
                    ->rule('digits:4'),
                Forms\Components\Select::make('group_id') // Ensure this matches the column in your database
                    ->helperText('몇기인지 선택하세요.')
                    ->label('기수')
                    ->options(Group::all()->pluck('name', 'id')) // Use 'id' as the key
                    ->required()
                    ->reactive(),
                Forms\Components\TextInput::make('graduate_name')
                    ->label('졸업명')
                    ->placeholder('홍길동(대구, 고3)')
                    ->maxLength(60),
                Select::make('user_id')
                    ->helperText('기수 먼저 선택 후 회원 조회 가능합니다.')
                    ->label('등록 회원 찾기')
                    ->options(function (callable $get) {
                        $groupId = $get('group_id');
                        if ($groupId) {
                            return User::where('group_id', $groupId)
                                ->selectRaw("CONCAT(COALESCE(name, ''), ' - 기수 ', COALESCE(group_id, '')) as name, id")
                                ->pluck('name', 'id')
                                ->toArray();
                        }
                        return [];
                    }),
                Forms\Components\Toggle::make('location')
                    ->label('홈에 노출하기'),
                Grid::make(1)
                    ->schema([
                        FileUpload::make('graduate_thumbnail')
                            ->imageEditor()
                            ->label('썸네일 이미지')
                            ->disk('s3')
                            ->directory('graduate-thumbnail')
                            //->preserveFilenames()
                            ->visibility('private')
                            ->default(fn ($record) => $record ? self::getGraduateThumbnailUrl($record) : null)
                            ->dehydrateStateUsing(fn ($state) => json_encode($state))
                    ]),
                    DateTimePicker::make('updated_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('group.name')
                ->label('기수')
                ->searchable()
                ->sortable()
                ->width('100px'),
                Tables\Columns\ImageColumn::make('graduate_thumbnail')
                    ->label('이미지')
                    ->disk('s3')
                    ->width('70px'), // Adjust the width as needed
                Tables\Columns\TextColumn::make('graduate_name')
                    ->label('졸업자 정보')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->date()
            ])
            ->filters([
                SelectFilter::make('group_id')
                    ->label('기수')
                    ->options(Group::all()->pluck('name', 'id')->toArray())
                    ->searchable(),
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
            ->defaultSort('group_id', 'desc');
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
            'index' => Pages\ListGraduates::route('/'),
            'create' => Pages\CreateGraduate::route('/create'),
            'edit' => Pages\EditGraduate::route('/{record}/edit'),
        ];
    }

    protected static function getGraduateThumbnailUrl($record)
    {
        if ($record && $record->graduate_thumbnail) {
            $graduateThumbnail = json_decode($record->graduate_thumbnail, true);
            $imageKey = reset($graduateThumbnail);
            return Storage::disk('s3')->url($imageKey);
        }
        return null;
    }

   
}
