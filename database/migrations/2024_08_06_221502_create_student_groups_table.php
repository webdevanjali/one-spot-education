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
        Schema::create('student_groups', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Name of the student group
            $table->text('description')->nullable(); // Description of the group
            $table->unsignedBigInteger('created_by'); // Foreign key to users table (creator of the group)
            $table->enum('status', ['active', 'inactive', 'archived'])->default('active'); // Status of the group
            $table->timestamps(); // Created_at and updated_at timestamps
            
            // Foreign key constraint
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_groups');
    }
};
