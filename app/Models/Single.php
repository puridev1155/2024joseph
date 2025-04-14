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
        'thumbnail'
    ];

    protected $casts = [
        'thumbnail' => 'string'
    ];


    public function getThumbnailUrlAttribute(): ?string
    {

        return $this->thumbnail
        ? Storage::disk('public')->url($this->thumbnail)
        : '';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereNot('category_id', 3);
    }
}
