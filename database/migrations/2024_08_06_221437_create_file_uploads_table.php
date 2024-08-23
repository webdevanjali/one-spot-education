<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('file_uploads', function (Blueprint $table) {
            $table->id('file_id');
            $table->foreignId('user_id')->constrained('users');
            $table->string('file_path', 255);
            $table->string('file_title', 255);
            $table->string('file_type', 50);
            $table->date('upload_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('file_uploads');
    }
};
