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
        Schema::create('task_assignments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('task_type'); // Foreign key to some table
            $table->unsignedBigInteger('assigned_to'); // Foreign key to users table (user assigned the task)
            $table->unsignedBigInteger('assigned_by'); // Foreign key to users table (user who assigned the task)
            $table->dateTime('due_date')->nullable(); // Due date for the task
            $table->text('notes')->nullable(); // Additional notes about the task
            $table->enum('status', ['pending', 'completed', 'in_progress', 'overdue'])->default('pending'); // Status of the task
            $table->timestamp('completed_at')->nullable(); // Timestamp when the task was completed
            $table->timestamps(); // Created_at and updated_at timestamps
            
            // Foreign key constraints
            // $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('assigned_by')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_assignments');
    }
};
