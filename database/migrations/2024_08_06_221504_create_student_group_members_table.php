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
        Schema::create('student_group_members', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('student_group_id'); // Foreign key to student_groups table
            $table->unsignedBigInteger('user_id'); // Foreign key to users table (student)
            $table->enum('role', ['member', 'admin'])->default('member'); // Role in the group
            $table->timestamps(); // Created_at and updated_at timestamps
            
            // Foreign key constraints
            $table->foreign('student_group_id')->references('id')->on('student_groups')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }        

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_group_members');
    }
};
