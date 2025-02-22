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
        'graduate_thumbnail',
    ];

    protected $casts = [
        'graduate_thumbnail' => 'json'
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

    public function getThumbnailUrl()
    {
        if ($this->graduate_thumbnail) {
            // Check if graduate_thumbnail is already an array
            $graduateThumbnail = is_array($this->graduate_thumbnail) ? $this->graduate_thumbnail : json_decode($this->graduate_thumbnail, true);
    
            if ($graduateThumbnail && is_array($graduateThumbnail)) {
                $imageKey = reset($graduateThumbnail);
                return Storage::disk('s3')->url($imageKey);
            }
        }
        return null;
    }
}
