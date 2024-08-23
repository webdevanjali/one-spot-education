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
        Schema::create('user_settings', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->string('setting_key'); // Key for the setting
            $table->text('setting_value'); // Value for the setting
            $table->enum('setting_type', ['string', 'integer', 'boolean', 'json'])->default('string'); // Type of setting value
            $table->text('description')->nullable(); // Description of the setting
            $table->timestamps(); // Created_at and updated_at timestamps
            
            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_settings');
    }
};
