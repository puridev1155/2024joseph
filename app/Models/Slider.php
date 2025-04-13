<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'url',
        'content',
        'thumbnail',
        'slider_image'
    ];

    protected $casts = [
        'slider_image' => 'json', // Cast the profile_images attribute to an array
        'thumbnail' => 'string'
    ];

    // Ensure the model handles file uploads correctly
    protected function setSliderImageAttribute($value)
    {
        $this->attributes['slider_image'] = is_string($value) ? $value : json_encode($value);
    }

    public function getThumbnailUrlAttribute(): ?string
    {
        return $this->thumbnail
            ? asset('storage/thumbnail/' . $this->thumbnail)
            : null;
    }
    
}
