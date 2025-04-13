<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SingleResource\Pages;
use App\Filament\Resources\SingleResource\RelationManagers;
use App\Models\Single;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SingleResource extends Resource
{
    protected static ?string $model = Single::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';

    protected static ?string $navigationLabel = '소개 관리'; // Custom label in Korean
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Grid::make(2)
                ->schema([
            Forms\Components\TextInput::make('title')
                ->label('한글 제목')
                ->maxLength(255),
            Forms\Components\TextInput::make('en_title')
                ->label('영문 제목')
                ->maxLength(255),
            ]),
            Hidden::make('category_id')
            ->default(1),
            Forms\Components\TextInput::make('youtube_url')
            ->label('영상 유튜브 URL')
            ->maxLength(255),
            RichEditor::make('content')
            ->fileAttachmentsDisk('s3')
            ->fileAttachmentsDirectory('attachments')
            ->fileAttachmentsVisibility('private')
            ->columnSpanFull()
            ->toolbarButtons([
                'attachFiles',
                'blockquote',
                'bold',
                'bulletList',
                'codeBlock',
                'h2',
                'h3',
                'italic',
                'link',
                'orderedList',
                'redo',
                'strike',
                'underline',
                'undo',
            ]),
            Grid::make(1)
                ->schema([
                    FileUpload::make('single_thumbnail')
                        ->imageEditor()
                        ->label('썸네일 이미지')
                        ->disk('s3')
                        ->directory('single-thumbnail')
                        //->preserveFilenames()
                        ->visibility('private')
                        ->default(fn ($record) => $record ? self::getThumbnailUrl($record) : null)
                        ->dehydrateStateUsing(fn ($state) => json_encode($state)),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title')
                    ->label('한글 제목')
                    ->searchable(),
                Tables\Columns\TextColumn::make('en_title')
                    ->label('영문 제목')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('수정일')
                    ->date()
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make()
                ->label('수정'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                   
                ]),
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
            'index' => Pages\ListSingles::route('/'),
            'create' => Pages\CreateSingle::route('/create'),
            'edit' => Pages\EditSingle::route('/{record}/edit'),
        ];
    }

    protected static function getThumbnailUrl($record)
    {
        if ($record && $record->single_thumbnail) {
            $singleThumbnail = json_decode($record->single_thumbnail, true);
            $imageKey = reset($singleThumbnail);
            return Storage::disk('s3')->url($imageKey);
        }
        return null;
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereNot('category_id', 3);
    }
}
