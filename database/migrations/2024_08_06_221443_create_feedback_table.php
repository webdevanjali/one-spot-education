<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('feedback_id');
            $table->foreignId('student_id')->constrained('users');
            $table->foreignId('teacher_id')->constrained('users');
            $table->foreignId('course_id')->references('course_id')->on('courses');
            $table->text('feedback_text');
            $table->integer('rating');
            $table->string('media', 255)->nullable(); // File path for related media
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
