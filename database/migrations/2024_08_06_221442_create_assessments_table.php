<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id('assessment_id');
            $table->foreignId('course_id')->references('course_id')->on('courses');
            $table->string('title', 200);
            $table->text('description')->nullable();
            $table->integer('max_score')->nullable();
            $table->foreignId('teacher_id')->constrained('users');
            $table->string('assessment_file', 255)->nullable(); // File path for assessment file
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
