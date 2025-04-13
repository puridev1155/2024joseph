<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'url',
        'content',
        'thumbnail',
        'book_image'
    ];

    protected $casts = [
        'book_image' => 'json', // Cast the profile_images attribute to an array
        'thumbnail' => 'string',
    ];

    // Ensure the model handles file uploads correctly
    protected function setBookImageAttribute($value)
    {
        $this->attributes['book_image'] = is_string($value) ? $value : json_encode($value);
    }

    public function getBookUrl()
    {
        if ($this->book_image) {
            // Check if post_thumbnail is already an array
            $bookImage = is_array($this->book_image) ? $this->book_image : json_decode($this->book_image, true);
    
            if ($bookImage && is_array($bookImage)) {
                $imageKey = reset($bookImage);
                return Storage::disk('s3')->url($imageKey);
            }
        }
        return null;
    }

    public function getThumbnailUrlAttribute(): ?string
    {

        return $this->thumbnail
        ? Storage::disk('public')->url($this->thumbnail)
        : '';
    }
}
