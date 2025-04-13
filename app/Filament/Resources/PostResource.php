<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
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
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Forms\Components\DateTimePicker;
use Livewire\Livewire;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Log;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';

    protected static ?string $navigationLabel = '게시판 관리'; // Custom label in Korean
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {

        Log::info('Request Data:', Request::all()); // Log all the request data

        return $form
            ->schema([
                Grid::make(1)
                ->schema([
                    TextInput::make('title')
                        ->maxLength(255),
                ]),
                Hidden::make('category_id')
                ->default(3),
                Grid::make(1)
                ->schema([
                    FileUpload::make('thumbnail')
                    ->label('썸네일 이미지 1MB 미만')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('thumbnail')
                    ->preserveFilenames()
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string =>
                            now()->timestamp . '-' . $file->getClientOriginalName()
                    )
                    ->maxSize(30720)
                    
                ]),
                RichEditor::make('content')
                ->fileAttachmentsDisk('public') 
                ->fileAttachmentsDirectory('contents') 
                ->fileAttachmentsVisibility('public') 
                ->columnSpanFull()
                ->dehydrateStateUsing(function ($state) {
                    return $state;
                }),       
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->default(1)
                    ->numeric()
                    ->hidden() // Hide the field
                    ->disabled(), // Make the field read-only
                DateTimePicker::make('updated_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category.category_name')
                    ->label('Category')
                    ->searchable()
                    ->sortable()
                    ->width('50px'),
                ImageColumn::make('thumbnail')
                    ->label('썸네일')
                    ->width('150px')
                    ->height('200px'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
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
                SelectFilter::make('category_id')
                    ->label('Category')
                    ->options(Category::all()->pluck('category_name', 'id')->toArray())
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
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getThumbnailUrl($record)
    {
        $data = $record->thumbnail;
    
        if (is_string($data)) {
            $data = json_decode($data, true);
        }
    
        $filename = $data['name'] ?? null;
    
        return $filename
            ? asset('storage/public/thumbnail/' . $filename)
            : null;
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('category_id', 3);
    }

    


    
    
}
