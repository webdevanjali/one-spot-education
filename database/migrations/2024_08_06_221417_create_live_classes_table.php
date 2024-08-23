<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('live_classes', function (Blueprint $table) {
            $table->id('live_class_id');
            $table->unsignedBigInteger('course_id'); // Specify the type explicitly
            $table->foreign('course_id')->references('course_id')->on('courses'); // Correctly define foreign key
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->foreignId('teacher_id')->constrained('users');
            $table->string('class_link', 255)->nullable(); // Link to the live class
            $table->string('recording_file', 255)->nullable();
            $table->string('class_type', 50)->nullable(); // e.g., 'Live', 'Recorded'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('live_classes');
    }
    
};
