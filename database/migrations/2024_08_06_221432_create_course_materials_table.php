<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_materials', function (Blueprint $table) {
            $table->id('material_id');
            $table->foreignId('course_id')->references('course_id')->on('courses');
            $table->string('material_title', 200);
            $table->text('material_content');
            $table->string('material_file', 255)->nullable(); // File path for material file
            $table->string('material_type', 50)->nullable(); // e.g., 'Lecture Note', 'Reading'
            $table->string('media', 255)->nullable(); // File path for related media
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_materials');
    }
};
