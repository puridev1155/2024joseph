<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id',
        'title',
        'content',
        'post_thumbnail',
        'thumbnail',
        'post_images'
    ];


    protected $casts = [
        'post_images' => 'json', // Cast the profile_images attribute to an array
        'post_thumbnail' => 'json',
        'thumbnail' => 'string'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->user_id = 1;
        });

        static::saving(function ($model) {
            $model->user_id = 1;
        });
    }

    // Ensure the model handles file uploads correctly
    protected function setPostThumbnailAttribute($value)
    {
        $this->attributes['post_thumbnail'] = is_string($value) ? $value : json_encode($value);
    }

    public function getThumbnailUrlAttribute(): ?string
    {

        return $this->thumbnail
        ? Storage::disk('public')->url($this->thumbnail)
        : '';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
