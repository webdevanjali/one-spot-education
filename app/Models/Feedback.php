<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'feedback_text', 'given_by', 'received_by', 'course_id',
    ];

    public function giver()
    {
        return $this->belongsTo(User::class, 'given_by');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'received_by');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
