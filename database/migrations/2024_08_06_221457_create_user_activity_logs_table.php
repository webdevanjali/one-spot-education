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
        Schema::create('user_activity_logs', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->string('activity_type'); // Type of activity (e.g., login, file upload)
            $table->text('description')->nullable(); // Description of the activity
            $table->ipAddress('ip_address')->nullable(); // IP address from which the activity was performed
            $table->string('user_agent')->nullable(); // User agent string
            $table->timestamp('activity_date')->nullable(); // Date and time of the activity
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
        Schema::dropIfExists('user_activity_logs');
    }
};
