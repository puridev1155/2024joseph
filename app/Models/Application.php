<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'year',
        'group_id',
        'content1',
        'content2',
        'content3',
        'my_thumbnail',
        'my_family_thumbnail',
        'my_bank_thumbnail',
        'my_grade_thumbnail',
        'my_recommend_thumbnail',
        'my_instructor_thumbnail',
        'school',
        'department',
        'grade',
        'korean_name',
        'english_name',
        'ssn',
        'email',
        'address',
        'phone',
        'guardian_name',
        'guardian_church',
        'guardian_status',
        'guardian_relationship',
        'guardian_address',
        'guardian_phone',
        'guardian_email',
        'family',
        'home_status',
        'guardian_salary',
        'year1',
        'year2',
        'year3',
        'year4',
        'yearly',
        'language',
        'award',
        'my_images',
        'status1',
        'status2',
        'status3',
        'opening',
        'register_id'
    ];

    protected $casts = [
        'my_images' => 'json', // Cast the profile_images attribute to an array
        'my_thumbnail' => 'json',
        'family' => 'json',
    ];

    protected static function boot()
    {
        parent::boot();

    }

    /**
     * Get the user that owns the application.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Ensure the model handles file uploads correctly
    protected function setMyThumbnailAttribute($value)
    {
        $this->attributes['my_thumbnail'] = is_string($value) ? $value : json_encode($value);
    }

    protected function setMyFamilyThumbnailAttribute($value)
    {
        $this->attributes['my_family_thumbnail'] = is_string($value) ? $value : json_encode($value);
    }

    protected function setMyGradeThumbnailAttribute($value)
    {
        $this->attributes['my_grade_thumbnail'] = is_string($value) ? $value : json_encode($value);
    }

    protected function setMyBankThumbnailAttribute($value)
    {
        $this->attributes['my_bank_thumbnail'] = is_string($value) ? $value : json_encode($value);
    }

    protected function setMyRecommendThumbnailAttribute($value)
    {
        $this->attributes['my_recommend_thumbnail'] = is_string($value) ? $value : json_encode($value);
    }

    protected function setMyInstructorThumbnailAttribute($value)
    {
        $this->attributes['my_instructor_thumbnail'] = is_string($value) ? $value : json_encode($value);
    }

    protected function setMyImagesAttribute($value)
    {
        $this->attributes['my_images'] = is_string($value) ? $value : json_encode($value);
    }

    public function getThumbnailUrl()
    {
        if ($this->my_thumbnail) {
            // Check if post_thumbnail is already an array
            $myThumbnail = is_array($this->my_thumbnail) ? $this->my_thumbnail : json_decode($this->my_thumbnail, true);
    
            if ($myThumbnail && is_array($myThumbnail)) {
                $imageKey = reset($myThumbnail);
                return Storage::disk('s3')->url($imageKey);
            }
        }
        return null;
    }

    public function getFamilyThumbnailUrl()
    {
        if ($this->my_family_thumbnail) {
            // Check if post_thumbnail is already an array
            $myThumbnail = is_array($this->my_family_thumbnail) ? $this->my_family_thumbnail : json_decode($this->my_family_thumbnail, true);
    
            if ($myThumbnail && is_array($myThumbnail)) {
                $imageKey = reset($myThumbnail);
                return Storage::disk('s3')->url($imageKey);
            }
        }
        return null;
    }

    public function getBankThumbnailUrl()
    {
        if ($this->my_bank_thumbnail) {
            // Check if post_thumbnail is already an array
            $myThumbnail = is_array($this->my_bank_thumbnail) ? $this->my_bank_thumbnail : json_decode($this->my_bank_thumbnail, true);
    
            if ($myThumbnail && is_array($myThumbnail)) {
                $imageKey = reset($myThumbnail);
                return Storage::disk('s3')->url($imageKey);
            }
        }
        return null;
    }

    public function getGradeThumbnailUrl()
    {
        if ($this->my_grade_thumbnail) {
            // Check if post_thumbnail is already an array
            $myThumbnail = is_array($this->my_grade_thumbnail) ? $this->my_grade_thumbnail : json_decode($this->my_grade_thumbnail, true);
    
            if ($myThumbnail && is_array($myThumbnail)) {
                $imageKey = reset($myThumbnail);
                return Storage::disk('s3')->url($imageKey);
            }
        }
    }
       
       
    public function getRecommendThumbnailUrl()
    {
        if ($this->my_recommend_thumbnail) {
            // Check if post_thumbnail is already an array
            $myThumbnail = is_array($this->my_recommend_thumbnail) ? $this->my_recommend_thumbnail : json_decode($this->my_recommend_thumbnail, true);
    
            if ($myThumbnail && is_array($myThumbnail)) {
                $imageKey = reset($myThumbnail);
                return Storage::disk('s3')->url($imageKey);
            }
        }
        return null;
    }
        
    public function getInstructorThumbnailUrl()
    {
        if ($this->my_instructor_thumbnail) {
            // Check if post_thumbnail is already an array
            $myThumbnail = is_array($this->my_instructor_thumbnail) ? $this->my_instructor_thumbnail : json_decode($this->my_instructor_thumbnail, true);
    
            if ($myThumbnail && is_array($myThumbnail)) {
                $imageKey = reset($myThumbnail);
                return Storage::disk('s3')->url($imageKey);
            }
        }
        return null;
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}

