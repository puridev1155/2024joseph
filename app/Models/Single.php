<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Single extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id',
        'title',
        'en_title',
        'content',
        'youtube_url',
        'single_thumbnail'
    ];

    protected $casts = [
        'single_thumbnail' => 'json'
    ];


    public function getThumbnailUrl()
    {
        if ($this->single_thumbnail) {
            // Check if post_thumbnail is already an array
            $singleThumbnail = is_array($this->single_thumbnail) ? $this->single_thumbnail : json_decode($this->single_thumbnail, true);
    
            if ($singleThumbnail && is_array($singleThumbnail)) {
                $imageKey = reset($singleThumbnail);
                return Storage::disk('s3')->url($imageKey);
            }
        }
        return null;
    }
}
