<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'media_gallery_id', 'file_name', 'file_path',
    ];

    public function mediaGallery()
    {
        return $this->belongsTo(MediaGallery::class);
    }
}
