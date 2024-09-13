<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

   
    // Specify the table associated with the model
    protected $table = 'announcements';

    // Define the fillable attributes to allow mass assignment
    protected $fillable = [
        'labels',
        'created_by',
        'title',
        'message',
        'media',
    ];

    // Define the primary key column
    protected $primaryKey = 'announcement_id';

    // Indicate that the primary key is not an incrementing integer
    public $incrementing = true;

    // The primary key type is integer
    protected $keyType = 'int';

    // Enable timestamps
    public $timestamps = true;

    // Optionally, cast the labels attribute to an array for easier handling
    protected $casts = [
        'labels' => 'array',
    ];
    
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
