<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
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
use Livewire\Livewire;


class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    protected static ?string $navigationLabel = '책 관리'; // Custom label in Korean
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('title')
                ->label('제목')
                ->maxLength(255),
            Grid::make(1)
                ->schema([
                    FileUpload::make('book_image')
                        ->image()
                        ->imageEditor()
                        ->label('썸네일 이미지')
                        ->disk('s3')
                        ->directory('book-image')
                        ->visibility('private')
                        ->default(function ($record) {
                            return $record ? self::getThumbnailUrl($record) : null;
                        })
                        ->dehydrateStateUsing(function ($state) {
                            return is_array($state) ? json_encode($state) : $state;
                        }),
                ]),
            Forms\Components\TextInput::make('url')
                ->label('사이트 URL 주소')
                ->placeholder('https://...')
                ->maxLength(255),
            RichEditor::make('content')
                ->fileAttachmentsDisk('s3')
                ->fileAttachmentsDirectory('attachments')
                ->fileAttachmentsVisibility('private')
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->label('제목')
                ->searchable(),
                Tables\Columns\ImageColumn::make('book_image')
                    ->label('이미지')
                    ->disk('s3')
                    , // Adjust the width as needed
                Tables\Columns\TextColumn::make('url')
                    ->label('url')
                    ->searchable(),
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }

    protected static function getThumbnailUrl($record)
    {
        
        if ($record && $record->book_image) {
            $bookImage = json_decode($record->book_image, true);
            $imageKey = reset($bookImage);
            return Storage::disk('s3')->url($imageKey);
        }
        return null;
    }
}
