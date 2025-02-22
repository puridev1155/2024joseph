<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Application;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Filament\Forms\Concerns\InteractsWithForms;
use Livewire\Features\SupportValidation\BaseValidate;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str; // Import Str for UUID
use App\Models\Group;
use App\Models\Graduate;

class ApplicationForm extends Component implements HasForms
{
    use InteractsWithForms;
    use LivewireAlert;
    use WithFileUploads;

    public $formState = [];
    public $family = [];
    public $section;
    public $id;
    public $thumbnail;
    public $myThumbnail;
    public $gradeThumbnail;
    public $myGradeThumbnail;
    public $familyThumbnail;
    public $myFamilyThumbnail;
    public $bankThumbnail;
    public $myBankThumbnail;
    public $recommendThumbnail;
    public $myRecommendThumbnail;
    public $instructorThumbnail;
    public $myInstructorThumbnail;

    public function mount($section, $id)
    {
        $this->section = $section;
        $this->id = $id;
        $application = Application::where('user_id', Auth::id())->first();
        if($application) {
            $this->thumbnail = $application->getThumbnailUrl();
            $this->myThumbnail = $application->my_thumbnail;
            $this->gradeThumbnail = $application->getGradeThumbnailUrl();
            $this->myGradeThumbnail = $application->my_grade_thumbnail;
            $this->familyThumbnail = $application->getFamilyThumbnailUrl();
            $this->myFamilyThumbnail = $application->my_family_thumbnail;
            $this->bankThumbnail = $application->getBankThumbnailUrl();
            $this->myBankThumbnail = $application->my_bank_thumbnail;
            $this->recommendThumbnail = $application->getRecommendThumbnailUrl();
            $this->myRecommendThumbnail = $application->my_recommend_thumbnail;
            $this->instructorThumbnail = $application->getInstructorThumbnailUrl();
            $this->myInstructorThumbnail = $application->my_instructor_thumbnail;
        } else {
            $this->thumbnail = NULL;
            $this->myThumbnail = NULL;
            $this->gradeThumbnail = NULL;
            $this->myGradeThumbnail = NULL;
            $this->familyThumbnail = NULL;
            $this->myFamilyThumbnail = NULL;
            $this->bankThumbnail = NULL;
            $this->myBankThumbnail = NULL;
            $this->recommendThumbnail = NULL;
            $this->myRecommendThumbnail = NULL;
            $this->instructorThumbnail = NULL;
            $this->myInstructorThumbnail = NULL;
        }
       
        

        //서류 제출
       // $familyJson = $application->family;
       // if(is_string($familyJson)){
       //     $this->family = $familyJson ? json_decode($familyJson, true) : [];
            
       // }


        if ($application) {
            $this->formState = [
                'user_id' => $application->user_id,
                'year' => $application->year,
                'group_id' => $application->group_id,
                'my_thumbnail' => $application->getThumbnailUrl() ?? null, // Reset file upload field, since it's not stored as is
                'korean_name' => $application->korean_name,
                'english_name' => $application->english_name,
                'school' => $application->school,
                'department' => $application->department,
                'grade' => $application->grade,
                'ssn' => $application->ssn,
                'phone' => $application->phone,
                'address' => $application->address,
                'guardian_name' => $application->guardian_name,
                'guardian_church' => $application->guardian_church,
                'guardian_status' => $application->guardian_status,
                'guardian_relationship' => $application->guardian_relationship,
                'guardian_address' => $application->guardian_address,
                'guardian_phone' => $application->guardian_phone,
                'guardian_email' => $application->guardian_email,
                'home_status' => $application->home_status,
                'guardian_salary' => $application->guardian_salary,
                 // 'family' => $this->family,
                'year1' => $application->year1,
                'year2' => $application->year2,
                'year3' => $application->year3,
                'year4' => $application->year4,
                'yearly' => $application->yearly,
                'content1' => $application->content1,
                'content2' => $application->content2,
                'content3' => $application->content3,
                'language' => $application->language,
                'award' => $application->award,
                //'my_images' => $application->my_images
                'my_family_thumbnail' => $application->getFamilyThumbnailUrl(),
                'my_grade_thumbnail' => $application->getGradeThumbnailUrl(),
                'my_bank_thumbnail' => $application->getBankThumbnailUrl(),
                'my_recommend_thumbnail' => $application->getRecommendThumbnailUrl(),
                'my_instructor_thumbnail' => $application->getInstructorThumbnailUrl(),
                'opening' => $application->opening
            ];
        }
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make(2)
                ->schema([
                    TextInput::make('user_id')
                        ->label('User ID')
                        ->disabled() // Make it readonly since user_id is derived from Auth
                        ->numeric()
                        ->reactive(),

                    TextInput::make('year')
                        ->label('Year')
                        ->required()
                        ->numeric()
                        ->maxLength(4)
                        ->placeholder('Enter the year')
                        ->reactive()
                        ->afterStateUpdated(fn ($state) => $this->formState['year'] = $state),

                    Select::make('group_id')
                        ->label('Group')
                        ->options(Group::all()->pluck('name', 'id'))
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(fn ($state) => $this->formState['group_id'] = $state),

                    FileUpload::make('my_thumbnail')
                        ->label('Profile Picture')
                        ->disk('public')
                        ->directory('thumbnails')
                        ->visibility('public')
                        ->reactive()
                        ->afterStateUpdated(fn ($state) => $this->formState['my_thumbnail'] = $state),
                ]),
        ];
    }

    public function submit()
    {

        
        $validatedData = $this->validate([
            'formState.korean_name' => 'sometimes',
            'formState.english_name' => 'sometimes',
            'formState.ssn' => 'sometimes',
            'formState.phone' => 'sometimes',
            'formState.address' => 'sometimes',
            'formState.guardian_email' => 'sometimes',
            'formState.guardian_name' => 'sometimes',
            'formState.guardian_church' => 'sometimes',
            'formState.guardian_status' => 'sometimes',
            'formState.guardian_relationship' => 'sometimes',
            'formState.guardian_address' => 'sometimes',
            'formState.guardian_phone' => 'sometimes',
            'formState.home_status' => 'sometimes',
            'formState.guardian_salary' => 'sometimes',
            'formState.department' => 'sometimes',
            'formState.grade' => 'sometimes',
            'formState.school' => 'sometimes',
            'formState.year1' => 'sometimes',
            'formState.year2' => 'sometimes',
            'formState.year3' => 'sometimes',
            'formState.year4' => 'sometimes',
            'formState.yearly' => 'sometimes',
            'formState.language' => 'sometimes',
            'formState.award' => 'sometimes',
            'formState.opening' => 'sometimes',
        ]);

        if($this->myThumbnail == null) { //json인 경우
            if (isset($this->formState['my_thumbnail'])) {
                $uuid = Str::uuid()->toString();
                $filePath = $this->formState['my_thumbnail']->store('thumbnails', 's3');
                $fileJson = json_encode((Object)[$uuid => $filePath]);
                $validatedData['formState']['my_thumbnail'] = $fileJson;
            }
        } else if(isset($this->myThumbnail) && $this->formState['my_thumbnail'] == $this->thumbnail) {
            $validatedData['formState']['my_thumbnail'] = $this->myThumbnail;
        } else if(isset($this->formState['my_thumbnail'])) {
            $uuid = Str::uuid()->toString();
            $filePath = $this->formState['my_thumbnail']->store('thumbnails', 's3');
            $fileJson = json_encode((Object)[$uuid => $filePath]);
            $validatedData['formState']['my_thumbnail'] = $fileJson;
        } else {
            $validatedData['formState']['my_thumbnail'] = json_encode();
        }


        $applicationData = [
            'user_id' => Auth::user()->id,
            'year' => Graduate::max('year'),
            'group_id' => Group::max('group_number'),
            'my_thumbnail' => $validatedData['formState']['my_thumbnail'] ?? null,
            'korean_name' => $validatedData['formState']['korean_name'] ?? null,
            'english_name' => $validatedData['formState']['english_name'] ?? null,
            'ssn' => $validatedData['formState']['ssn'] ?? null,
            'phone' => $validatedData['formState']['phone'] ?? null,
            'address' => $validatedData['formState']['address'] ?? null,
            'guardian_email' => $validatedData['formState']['guardian_email'] ?? null,
            'guardian_name' => $validatedData['formState']['guardian_name'] ?? null,
            'guardian_church' => $validatedData['formState']['guardian_church'] ?? null,
            'guardian_status' => $validatedData['formState']['guardian_status'] ?? null,
            'guardian_relationship' => $validatedData['formState']['guardian_relationship'] ?? null,
            'guardian_address' => $validatedData['formState']['guardian_address'] ?? null,
            'guardian_phone' => $validatedData['formState']['guardian_phone'] ?? null,
            'home_status' => $validatedData['formState']['home_status'] ?? null,
            'guardian_salary' => $validatedData['formState']['guardian_salary'] ?? null,
            'language' => $validatedData['formState']['language'] ?? null,
            'school' => $validatedData['formState']['school'] ?? null,
            'department' => $validatedData['formState']['department'] ?? null,
            'grade' => $validatedData['formState']['grade'] ?? null,
            'award' => $validatedData['formState']['award'] ?? null,
            'year1' => $validatedData['formState']['year1'] ?? null,
            'year2' => $validatedData['formState']['year2'] ?? null,
            'year3' => $validatedData['formState']['year3'] ?? null,
            'year4' => $validatedData['formState']['year4'] ?? null,
            'yearly' => $validatedData['formState']['yearly'] ?? null,
        ];

        $existingApplication = Application::where('user_id', Auth::user()->id)->first();

        if ($existingApplication) {
            $existingApplication->update($applicationData);
        } else {
            Application::create($applicationData);
        }

        $this->alert('success', '저장 완료');
        //session()->flash('message', 'Application submitted successfully!');
    }

    public function submit2()
    {

        $validatedData = $this->validate([
            'formState.content1' => 'sometimes',
            'formState.content2' => 'sometimes',
            'formState.content3' => 'sometimes',
        ]);


        $applicationData = [
            'user_id' => Auth::user()->id,
            'year' => Graduate::max('year'),
            'group_id' => Group::max('group_number'),
            'content1' => $validatedData['formState']['content1'] ?? null,
            'content2' => $validatedData['formState']['content2'] ?? null,
            'content3' => $validatedData['formState']['content3'] ?? null,
        ];

        $existingApplication = Application::where('user_id', Auth::user()->id)->first();

        if ($existingApplication) {
            $existingApplication->update($applicationData);
        } else {
            Application::create($applicationData);
        }

        $this->alert('success', '저장 완료');

    }

    public function submit3()
    {
        //$validatedData = $this->validate([
            //'formState.my_images.*' => 'nullable|file|mimes:jpeg,png,jpg,gif', // Validate each file in the array
        //]);


        //$imagePaths = [];
        // Prepare the data for the database
        //$applicationData = [
        //    'my_images' => $validatedData['formState']['my_images'],
        //];

        //grade
        if($this->myGradeThumbnail == null) { //json인 경우
            if (isset($this->formState['my_grade_thumbnail'])) {
                $uuid = Str::uuid()->toString();
                $filePath = $this->formState['my_grade_thumbnail']->store('my-grade-thumbnails', 's3');
                $fileJson = json_encode((Object)[$uuid => $filePath]);
                $validatedData['formState']['my_grade_thumbnail'] = $fileJson;
            }
        } else if(isset($this->myGradeThumbnail) && $this->formState['my_grade_thumbnail'] == $this->gradeThumbnail) {
            $validatedData['formState']['my_grade_thumbnail'] = $this->myGradeThumbnail;
        } else if(isset($this->formState['my_grade_thumbnail'])) {
            $uuid = Str::uuid()->toString();
            $filePath = $this->formState['my_grade_thumbnail']->store('my-grade-thumbnails', 's3');
            $fileJson = json_encode((Object)[$uuid => $filePath]);
            $validatedData['formState']['my_grade_thumbnail'] = $fileJson;
        } else {
            $validatedData['formState']['my_grade_thumbnail'] = json_encode();
        }

        //grade
        if($this->myFamilyThumbnail == null) { //json인 경우
            if (isset($this->formState['my_family_thumbnail'])) {
                $uuid = Str::uuid()->toString();
                $filePath = $this->formState['my_family_thumbnail']->store('my-family-thumbnails', 's3');
                $fileJson = json_encode((Object)[$uuid => $filePath]);
                $validatedData['formState']['my_family_thumbnail'] = $fileJson;
            }
        } else if(isset($this->myFamilyThumbnail) && $this->formState['my_family_thumbnail'] == $this->familyThumbnail) {
            $validatedData['formState']['my_family_thumbnail'] = $this->myFamilyThumbnail;
        } else if(isset($this->formState['my_family_thumbnail'])) {
            $uuid = Str::uuid()->toString();
            $filePath = $this->formState['my_family_thumbnail']->store('my-family-thumbnails', 's3');
            $fileJson = json_encode((Object)[$uuid => $filePath]);
            $validatedData['formState']['my_family_thumbnail'] = $fileJson;
        } else {
            $validatedData['formState']['my_family_thumbnail'] = json_encode();
        }

        //bank
        if($this->myBankThumbnail == null) { //json인 경우
            if (isset($this->formState['my_bank_thumbnail'])) {
                $uuid = Str::uuid()->toString();
                $filePath = $this->formState['my_bank_thumbnail']->store('my-bank-thumbnails', 's3');
                $fileJson = json_encode((Object)[$uuid => $filePath]);
                $validatedData['formState']['my_bank_thumbnail'] = $fileJson;
            }
        } else if(isset($this->myBankThumbnail) && $this->formState['my_bank_thumbnail'] == $this->bankThumbnail) {
            $validatedData['formState']['my_bank_thumbnail'] = $this->myBankThumbnail;
        } else if(isset($this->formState['my_bank_thumbnail'])) {
            $uuid = Str::uuid()->toString();
            $filePath = $this->formState['my_bank_thumbnail']->store('my-bank-thumbnails', 's3');
            $fileJson = json_encode((Object)[$uuid => $filePath]);
            $validatedData['formState']['my_bank_thumbnail'] = $fileJson;
        } else {
            $validatedData['formState']['my_bank_thumbnail'] = json_encode();
        }
        
        //dd($this->recommendThumbnail);
        //recommend
        if($this->myRecommendThumbnail == null) { //json인 경우
            if (isset($this->formState['my_recommend_thumbnail'])) {
                $uuid = Str::uuid()->toString();
                $filePath = $this->formState['my_recommend_thumbnail']->store('my-recommend-thumbnails', 's3');
                $fileJson = json_encode((Object)[$uuid => $filePath]);
                $validatedData['formState']['my_recommend_thumbnail'] = $fileJson;
            }
        } else if(isset($this->myRecommendThumbnail) && $this->formState['my_recommend_thumbnail'] == $this->recommendThumbnail) {
            $validatedData['formState']['my_recommend_thumbnail'] = $this->myRecommendThumbnail;
        } else if(isset($this->formState['my_recommend_thumbnail'])) {
            $uuid = Str::uuid()->toString();
            $filePath = $this->formState['my_recommend_thumbnail']->store('my-recommend-thumbnails', 's3');
            $fileJson = json_encode((Object)[$uuid => $filePath]);
            $validatedData['formState']['my_recommend_thumbnail'] = $fileJson;
        } else {
            $validatedData['formState']['my_recommend_thumbnail'] = json_encode();
        }

       
        //instructor
        if($this->myInstructorThumbnail == null) { //json인 경우
            if (isset($this->formState['my_instructor_thumbnail'])) {
                $uuid = Str::uuid()->toString();
                $filePath = $this->formState['my_instructor_thumbnail']->store('my-instructor-thumbnails', 's3');
                $fileJson = json_encode((Object)[$uuid => $filePath]);
                $validatedData['formState']['my_instructor_thumbnail'] = $fileJson;
            }
        } else if(isset($this->myBankThumbnail) && $this->formState['my_instructor_thumbnail'] == $this->instructorThumbnail) {
            $validatedData['formState']['my_instructor_thumbnail'] = $this->myInstructorThumbnail;
        } else if(isset($this->formState['my_instructor_thumbnail'])) {
            $uuid = Str::uuid()->toString();
            $filePath = $this->formState['my_instructor_thumbnail']->store('my-instructor-thumbnails', 's3');
            $fileJson = json_encode((Object)[$uuid => $filePath]);
            $validatedData['formState']['my_instructor_thumbnail'] = $fileJson;
        } else {
            $validatedData['formState']['my_instructor_thumbnail'] = json_encode();
        }


        $applicationData = [
            'user_id' => Auth::user()->id,
            'year' => Graduate::max('year'),
            'group_id' => Group::max('group_number'),
            'my_family_thumbnail' => $validatedData['formState']['my_family_thumbnail'] ?? null,
            'my_recommend_thumbnail' => $validatedData['formState']['my_recommend_thumbnail'] ?? null,
            'my_instructor_thumbnail' => $validatedData['formState']['my_instructor_thumbnail'] ?? null,
            'my_bank_thumbnail' => $validatedData['formState']['my_bank_thumbnail'] ?? null,
            'my_grade_thumbnail' => $validatedData['formState']['my_grade_thumbnail'] ?? null,


        ];

        $existingApplication = Application::where('user_id', Auth::user()->id)->first();

        if ($existingApplication) {
            $existingApplication->update($applicationData);
        } else {
            Application::create($applicationData);
        }

        $this->alert('success', '저장 완료');
        //session()->flash('message', 'Application submitted successfully!');
    }

    public function submit4()
    {


        $applicationData = [
            'user_id' => Auth::user()->id,
            'year' => Graduate::max('year'),
            'group_id' => Group::max('group_number'),
            'register_id' => $this->id,
            'opening' => '0',
        ];


        $existingApplication = Application::where('user_id', Auth::user()->id)->first();

        if ($existingApplication) {
            $existingApplication->update($applicationData);
        } else {
            Application::create($applicationData);
        }

        $this->alert('success', '저장 완료');
        return $this->redirectRoute('scholarship.register');
        //session()->flash('message', 'Application submitted successfully!');
    }

    public function render()
    {
        return view('livewire.application-form', [
            'form' => $this->form,
            'currentSection' => $this->section,
            'id' => $this->id,
        ]);
    }
}