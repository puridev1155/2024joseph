<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id',
        'group_id',
        'title',
        'content',
        'notice_thumbnail',
        'notice_images'
    ];

    protected $casts = [
        'notice_images' => 'json', // Cast the profile_images attribute to an array
        'notice_thumbnail' => 'json'
    ];

    // Ensure the model handles file uploads correctly
    protected function setNoticeThumbnailAttribute($value)
    {
        $this->attributes['notice_thumbnail'] = is_string($value) ? $value : json_encode($value);
    }

    protected function setNoticeImagesAttribute($value)
    {
        $this->attributes['notice_images'] = is_string($value) ? $value : json_encode($value);
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
