<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id('course_id'); // This creates an auto-incrementing BIGINT column named 'course_id'
            $table->string('course_name', 100)->unique()->notNull();
            $table->text('description')->nullable();
            $table->foreignId('teacher_id')->constrained('users');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('course_schedule')->nullable(); // JSON or text for schedule details
            $table->string('cover_image', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
