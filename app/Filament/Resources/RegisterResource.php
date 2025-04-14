<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegisterResource\Pages;
use App\Filament\Resources\RegisterResource\RelationManagers;
use App\Models\Register;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegisterResource extends Resource
{
    protected static ?string $model = Register::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';

    protected static ?string $navigationLabel = '신청서 관리'; // Custom label in Korean
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('register_date')
                ->label('신청기간')
                ->maxLength(255),
                RichEditor::make('register_qualification')
                ->label('입학자격')
                    ->fileAttachmentsDisk('s3')
                    ->fileAttachmentsDirectory('attachments')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpanFull(),
                RichEditor::make('register_process')
                ->label('모집인원')
                    ->fileAttachmentsDisk('s3')
                    ->fileAttachmentsDirectory('attachments')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpanFull(),
                RichEditor::make('register_contact')
                ->label('문의처')
                    ->fileAttachmentsDisk('s3')
                    ->fileAttachmentsDirectory('attachments')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('register_agree')
                ->label('신청서 오픈')
                ->helperText('닫을 경우 신청서는 종료됩니다.')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->label('신청 종류')
                    ->searchable(),
                Tables\Columns\TextColumn::make('register_date')
                ->label('신청 날짜')
                    ->searchable(),
                Tables\Columns\IconColumn::make('register_agree')
                ->label('신청서 오픈 여부')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make()
                ->label('수정'),
            ]);
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
            'index' => Pages\ListRegisters::route('/'),
            'create' => Pages\CreateRegister::route('/create'),
            'edit' => Pages\EditRegister::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereIn('id', [4,3]);
    }
}
