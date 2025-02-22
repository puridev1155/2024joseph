<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NoticeResource\Pages;
use App\Filament\Resources\NoticeResource\RelationManagers;
use App\Models\Notice;
use App\Models\Group;
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
use Filament\Forms\Components\DateTimePicker;
use Livewire\Livewire;


class NoticeResource extends Resource
{
    protected static ?string $model = Notice::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = '기수별 공지 관리'; // Custom label in Korean
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                ->schema([
                    Select::make('category_id')
                            ->label('Category')
                            ->options(Category::whereNotIn('category_name', ['소개', '질문'])->get()->pluck('category_name', 'id')->toArray())
                            ->searchable()
                            ->required()
                            ->createOptionForm([
                                TextInput::make('category_name')
                                    ->label('New Category Name')
                                    ->required(),
                            ])
                            ->afterStateUpdated(function (Select $component, $state) {
                                if ($state === 'create-new') {
                                    $component->openModal('createCategoryModal');
                                }
                            })
                            ->createOptionUsing(function ($data) {
                                return Category::create(['category_name' => $data['category_name']])->id;
                            }),
                    TextInput::make('title')
                        ->maxLength(255),
                ]),
                Forms\Components\Select::make('group_id') // Ensure this matches the column in your database
                    ->helperText('몇기인지 선택하세요.')
                    ->label('기수')
                    ->options(Group::all()->pluck('name', 'id')) // Use 'id' as the key
                    ->required()
                    ->reactive(),
                    RichEditor::make('content')
                    ->fileAttachmentsDisk('s3')
                    ->fileAttachmentsDirectory('attachments')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpanFull(),
                Grid::make(1)
                    ->schema([
                        FileUpload::make('notice_thumbnail')
                            ->imageEditor()
                            ->label('썸네일 이미지')
                            ->disk('s3')
                            ->directory('notice-thumbnail')
                            //->preserveFilenames()
                            ->visibility('public')
                            ->default(fn ($record) => $record ? self::getThumbnailUrl($record) : null)
                            ->dehydrateStateUsing(fn ($state) => json_encode($state)),
                    ]),
                Grid::make(1)
                ->schema([
                    FileUpload::make('notice_images')
                        ->helperText('여러 파일 등록 가능')
                        ->label('파일')
                        ->disk('s3')
                        ->directory('notice-images')
                        ->multiple()
                        //->preserveFilenames()
                        ->visibility('public')
                        ->default(fn ($record) => $record ? json_decode($record->notice_images, true) : [])
                        ->dehydrateStateUsing(fn ($state) => is_array($state) ? json_encode($state) : $state),
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
                TextColumn::make('group.name')
                    ->label('기수')
                    ->searchable()
                    ->sortable()
                    ->width('50px'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListNotices::route('/'),
            'create' => Pages\CreateNotice::route('/create'),
            'edit' => Pages\EditNotice::route('/{record}/edit'),
        ];
    }


    protected static function getThumbnailUrl($record)
    {
        if ($record && $record->notice_thumbnail) {
            $noticeThumbnail = json_decode($record->noice_thumbnail, true);
            $imageKey = reset($noticeThumbnail);
            return Storage::disk('s3')->url($imageKey);
        }
        return null;
    }
}
