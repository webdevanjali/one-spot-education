<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_name', 'description',
    ];

    public function members()
    {
        return $this->hasMany(StudentGroupMember::class);
    }
}
