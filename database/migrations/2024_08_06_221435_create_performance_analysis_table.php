<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('performance_analysis', function (Blueprint $table) {
            $table->id('performance_id');
            $table->foreignId('student_id')->constrained('users');
            $table->foreignId('course_id')->references('course_id')->on('courses');
            $table->integer('grade_average');
            $table->integer('attendance_percentage');
            $table->text('feedback')->nullable();
            $table->string('media', 255)->nullable(); // File path for related media
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('performance_analysis');
    }
};
