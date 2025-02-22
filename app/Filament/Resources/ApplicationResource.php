<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicationResource\Pages;
use App\Filament\Resources\ApplicationResource\RelationManagers;
use App\Models\Application;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\View;
use Filament\Forms\Components\Textarea;
use App\Models\User;
use App\Models\Group;
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
use Filament\Tables\Actions\ViewAction;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Livewire\Livewire;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';
    protected static ?string $navigationLabel = '신청자 관리'; // Custom label in Korean
    protected static ?string $navigationGroup = 'User';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)
                ->schema([
                    Grid::make(1)
                ->schema([
                    View::make('components.thumbnail-display')
                    ->label('Thumbnail Preview')
                    ->viewData([
                        'record' => $form->getRecord(), // Pass the record directly
                    ])
                    ->columnSpan(1),
                ]),
                ]),
                Forms\Components\Select::make('group_id') // Ensure this matches the column in your database
                    ->label('기수')
                    ->options(Group::all()->pluck('name', 'id')) // Use 'id' as the key
                    ->required(),
                Textarea::make('content1')
                    ->label('자기소개 및 간단한 성장과정')
                    ->columnSpan('full') // Makes the textarea take the full width of the form
                    ->live(true) // Enables live updates if needed
                    ->rows(10),
                Textarea::make('content2')
                    ->label('장래 포부와 향후계획')
                    ->columnSpan('full') // Makes the textarea take the full width of the form
                    ->live(true) // Enables live updates if needed
                    ->rows(10),
                Textarea::make('content3')
                    ->label('장학금 신청 이유')
                    ->columnSpan('full') // Makes the textarea take the full width of the form
                    ->live(true) // Enables live updates if needed
                    ->rows(10),
                Forms\Components\Section::make('내 정보')
                    ->schema([
                        Grid::make(5)
                        ->schema([
                Forms\Components\TextInput::make('school')
                    ->label('학교')
                    ->maxLength(40)
                    ->live(true),
                Forms\Components\TextInput::make('department')
                    ->label('학과')
                    ->maxLength(40)
                    ->live(true),
                Forms\Components\TextInput::make('grade')
                    ->label('학년')
                    ->maxLength(40)
                    ->live(true),
                Forms\Components\TextInput::make('korean_name')
                    ->label('성명(한글)')
                    ->maxLength(40)
                    ->live(true),
                Forms\Components\TextInput::make('english_name')
                    ->label('성명(영문)')
                    ->maxLength(40)
                    ->live(true),
                Forms\Components\TextInput::make('ssn')
                    ->label('주민등록번호')
                    ->maxLength(40)
                    ->live(true),
                Forms\Components\TextInput::make('birth')
                    ->label('생년월일')
                    ->maxLength(40) //생년월일 문제가 있음.
                    ->live(true),
                Forms\Components\TextInput::make('email')
                    ->label('이메일')
                    ->email()
                    ->maxLength(40)
                    ->live(true),
                Forms\Components\TextInput::make('address')
                    ->label('주소')
                    ->maxLength(100)
                    ->live(true),
                    TextInput::make('phone')
                    ->label('연락처')
                    ->tel()
                    ->maxLength(11)
                    ->live(true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        // Fetch birth data based on phone number
                        $user = User::where('phone', $state)->first();
                        $set('birth', $user ? $user->birth : 'No matching user found');
                    }),
                Forms\Components\TextInput::make('language')
                    ->label('어학능력')
                    ->maxLength(40)
                    ->live(true),
                Forms\Components\TextInput::make('award')
                    ->label('수상경력')
                    ->maxLength(40)
                    ->live(true),
                ]), ]),
                Forms\Components\Section::make('내 학교 성적')
                ->schema([
                Grid::make(5)
                ->schema([
                Forms\Components\TextInput::make('year1')
                    ->label('1학년')
                    ->maxLength(10)
                    ->live(true),
                Forms\Components\TextInput::make('year2')
                    ->label('2학년')
                    ->maxLength(10)
                    ->live(true),
                Forms\Components\TextInput::make('year3')
                    ->label('3학년')
                    ->maxLength(10)
                    ->live(true),
                Forms\Components\TextInput::make('year4')
                    ->label('4학년')
                    ->maxLength(10)
                    ->live(true),
                Forms\Components\TextInput::make('yearly')
                    ->label('전학년 평균')
                    ->maxLength(10)
                    ->live(true)
                    ]),
                ]),
                Forms\Components\Section::make('보호자 정보')
                ->schema([
                    Grid::make(5)
                    ->schema([
                    Forms\Components\TextInput::make('guardian_name')
                    ->label('성명')
                        ->maxLength(40)
                        ->live(true),
                    Forms\Components\TextInput::make('guardian_church')
                    ->label('교회')
                        ->maxLength(40)
                        ->live(true),
                    Forms\Components\TextInput::make('guardian_status')
                    ->label('직위')
                        ->maxLength(40)
                        ->live(true),
                    Forms\Components\TextInput::make('guardian_relationship')
                    ->label('관계')
                        ->maxLength(40)
                        ->live(true),
                    Forms\Components\TextInput::make('guardian_address')
                    ->label('주소')
                        ->maxLength(100)
                        ->live(true),
                    Forms\Components\TextInput::make('guardian_phone')
                    ->label('전화번호')
                        ->tel()
                        ->maxLength(11)
                        ->live(true),
                    Forms\Components\TextInput::make('guardian_email')
                    ->label('이메일')
                        ->email()
                        ->maxLength(41)
                        ->live(true),
                    Forms\Components\TextInput::make('home_status')
                        ->label('보호자 주택보유사항')
                        ->maxLength(41)
                        ->live(true),
                    Forms\Components\TextInput::make('guardian_salary')
                        ->label('보호자 소득 (월 기준)')
                        ->maxLength(41) ])
                        ->live(true),
                ]),
                Forms\Components\Section::make('가족 관계')
                ->schema([
                Grid::make(1)
                ->schema([
                Forms\Components\Repeater::make('family')
                    ->schema([
                        Forms\Components\Grid::make(3)  // Adjust the number of columns here
                            ->schema([
                                Forms\Components\TextInput::make('family_relationship')->label('관계'),
                                Forms\Components\TextInput::make('family_name')->label('성명'),
                                Forms\Components\TextInput::make('family_age')->label('연령'),
                                Forms\Components\TextInput::make('family_job')->label('직업'),
                            ])
                    ])
                    ->label('가족관계')
                    ->minItems(1)
                    ->createItemButtonLabel('가족 관계 추가')]),
                ]),
                
                Grid::make(1)
                ->schema([
                    View::make('components.family-thumbnail-display')
                    ->label('Thumbnail Preview')
                    ->viewData([
                        'record' => $form->getRecord(), // Pass the record directly
                    ])
                    ->columnSpan('full'),
                ]),
                Grid::make(1)
                ->schema([
                    View::make('components.grade-thumbnail-display')
                    ->label('Thumbnail Preview')
                    ->viewData([
                        'record' => $form->getRecord(), // Pass the record directly
                    ])
                    ->columnSpan('full'),
                ]),
                Grid::make(1)
                ->schema([
                    View::make('components.bank-thumbnail-display')
                    ->label('Thumbnail Preview')
                    ->viewData([
                        'record' => $form->getRecord(), // Pass the record directly
                    ])
                    ->columnSpan('full'),
                ]),
                Grid::make(1)
                ->schema([
                    View::make('components.recommend-thumbnail-display')
                    ->label('Thumbnail Preview')
                    ->viewData([
                        'record' => $form->getRecord(), // Pass the record directly
                    ])
                    ->columnSpan('full'),
                ]),
                Grid::make(1)
                ->schema([
                    View::make('components.instructor-thumbnail-display')
                    ->label('Thumbnail Preview')
                    ->viewData([
                        'record' => $form->getRecord(), // Pass the record directly
                    ])
                    ->columnSpan('full'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                ->label('회원이름')
                ->sortable()
                ->searchable(),
            TextColumn::make('user.phone')
                ->label('회원연락처')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->width('80px')
                    ->label('년도')
                    ->searchable(),
                TextColumn::make('group.name')
                    ->label('기수')
                    ->searchable()
                    ->sortable()
                    ->width('50px'),
                Tables\Columns\TextColumn::make('korean_name')
                    ->label('이름(한글)')
                    ->searchable(),
                Tables\Columns\TextColumn::make('opening')
                ->label('완료 여부')
                ->formatStateUsing(function ($state) {

                    return $state === '1' ? '접수중' : '완료';
                })
                ->icon(function ($state) {
                    return $state === '1' ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle';
                })
                ->color(function ($state) {
                    return $state === '1' ? 'danger' : 'success';
                }),
                Tables\Columns\TextColumn::make('updated_at')
                    ->date()
            ])
            ->query(function () {
                return Application::with('user'); // Ensure user relationship is eager loaded
            })
            ->filters([
                SelectFilter::make('group_id')
                ->label('기수')
                ->options(Group::all()->pluck('name', 'id')->toArray())
            ])
            ->actions([
                ViewAction::make()
                    ->label('보기')
                    ->form([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        // Additional form fields as needed
                    ]),
                // Other actions...
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
            'index' => Pages\ListApplications::route('/'),
            'create' => Pages\CreateApplication::route('/create'),
            'view' => Pages\ViewApplication::route('/{record}'),
            'edit' => Pages\EditApplication::route('/{record}/edit'),
            'winners' => Pages\Applicant::route('/{record}/applicant'), 
        ];
    }

    protected static function getThumbnailUrl($record)
    {
        if ($record && $record->my_thumbnail) {
            $myThumbnail = json_decode($record->my_thumbnail, true);
            $imageKey = reset($myThumbnail);
            return Storage::disk('s3')->url($imageKey);
        }
        return null;
    }

    protected static function getFamilyThumbnailUrl($record)
    {
        if ($record && $record->my_family_thumbnail) {
            $myThumbnail = json_decode($record->my_family_thumbnail, true);
            $imageKey = reset($myThumbnail);
            return Storage::disk('s3')->url($imageKey);
        }
        return null;
    }

    protected static function getBankThumbnailUrl($record)
    {
        if ($record && $record->my_bank_thumbnail) {
            $myThumbnail = json_decode($record->my_bank_thumbnail, true);
            $imageKey = reset($myThumbnail);
            return Storage::disk('s3')->url($imageKey);
        }
        return null;
    }

    protected static function getGradeThumbnailUrl($record)
    {
        if ($record && $record->my_grade_thumbnail) {
            $myThumbnail = json_decode($record->my_grade_thumbnail, true);
            $imageKey = reset($myThumbnail);
            return Storage::disk('s3')->url($imageKey);
        }
        return null;
    }

    protected static function getRecommendThumbnailUrl($record)
    {
        if ($record && $record->my_recommend_thumbnail) {
            $myThumbnail = json_decode($record->my_recommend_thumbnail, true);
            $imageKey = reset($myThumbnail);
            return Storage::disk('s3')->url($imageKey);
        }
        return null;
    }

    protected static function getInstructorThumbnailUrl($record)
    {
        if ($record && $record->my_instructor_thumbnail) {
            $myThumbnail = json_decode($record->my_instructor_thumbnail, true);
            $imageKey = reset($myThumbnail);
            return Storage::disk('s3')->url($imageKey);
        }
        return null;
    }
}
