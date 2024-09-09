<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGroupMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_group_id', 'user_id',
    ];

    public function studentGroup()
    {
        return $this->belongsTo(StudentGroup::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
