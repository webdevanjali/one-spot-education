<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'courses';

    // Specify the primary key column
    protected $primaryKey = 'course_id';

    // If your primary key is not auto-incrementing
    public $incrementing = false;

    // If your primary key is not an integer
    protected $keyType = 'string'; // Change to 'int' if it's an integer

    // Add any other necessary model configurations

    protected $fillable = [
        'course_id',
        'course_name',
        'description',
        'teacher_id',
        'start_date',
        'end_date',
        'course_schedule',
        'cover_image',
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function enrollments()
    {
        return $this->hasMany(CourseEnrollment::class);
    }

    public function materials()
    {
        return $this->hasMany(CourseMaterial::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
