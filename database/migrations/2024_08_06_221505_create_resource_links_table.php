<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resource_links', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Title of the resource link
            $table->text('url'); // URL of the resource link
            $table->text('description')->nullable(); // Description of the resource link
            $table->unsignedBigInteger('added_by'); // Foreign key to users table (user who added the resource)
            $table->timestamp('added_date')->nullable(); // Date and time when the resource was added
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status of the resource link
            $table->timestamps(); // Created_at and updated_at timestamps
            
            // Foreign key constraint
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resource_links');
    }
};
