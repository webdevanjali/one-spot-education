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
        Schema::create('user_interactions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->unsignedBigInteger('interacted_user_id'); // Foreign key to users table (the user interacted with)
            $table->string('interaction_type'); // Type of interaction (e.g., message, comment)
            $table->text('details')->nullable(); // Additional details about the interaction
            $table->enum('status', ['active', 'inactive', 'archived'])->default('active'); // Status of the interaction
            $table->timestamp('interaction_date')->nullable(); // Date and time of the interaction
            $table->timestamps(); // Created_at and updated_at timestamps
            
            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('interacted_user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_interactions');
    }
};
