<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id('assignment_id');
            $table->foreignId('course_id')->references('course_id')->on('courses');
            $table->string('title', 200);
            $table->text('description')->nullable();
            $table->date('due_date')->nullable();
            $table->integer('max_points')->nullable();
            $table->foreignId('teacher_id')->constrained('users');
            $table->string('assignment_file', 255)->nullable(); // File path for assignment file
            $table->string('cover_image', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('homeworks', function (Blueprint $table) {
            $table->dropForeign(['assignment_id']);
        });
        Schema::dropIfExists('assignments');
    }
};
