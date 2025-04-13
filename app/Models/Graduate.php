<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Graduate extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'year',
        'user_id',
        'group_id',
        'location',
        'graduate_name',
        'thumbnail',
    ];

    protected $casts = [
        'thumbnail' => 'string'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    // Ensure the model handles file uploads correctly
    protected function setGraduateThumbnailAttribute($value)
    {
        $this->attributes['graduate_thumbnail'] = is_string($value) ? $value : json_encode($value);
    }

    public function getThumbnailUrlAttribute(): ?string
    {

        return $this->thumbnail
        ? Storage::disk('public')->url($this->thumbnail)
        : '';
    }

}
