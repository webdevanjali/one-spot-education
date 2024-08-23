<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('media_items', function (Blueprint $table) {
            $table->id('media_item_id');
            $table->foreignId('gallery_id')->nullable()->constrained('media_gallery', 'gallery_id');
            $table->string('file_path', 255);
            $table->string('media_type', 50); // e.g., 'image', 'video'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('media_items');
    }
};
