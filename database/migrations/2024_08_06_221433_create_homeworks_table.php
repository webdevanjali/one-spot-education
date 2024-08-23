<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('homeworks', function (Blueprint $table) {
            $table->id('homework_id');
            $table->foreignId('assignment_id')->references('assignment_id')->on('assignments');
            $table->foreignId('student_id')->constrained('users');
            $table->string('homework_file', 255);
            $table->date('submission_date');
            $table->integer('score')->nullable();
            $table->string('media', 255)->nullable(); // File path for additional media
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('homeworks', function (Blueprint $table) {
            $table->dropForeign(['assignment_id']);
            $table->dropForeign(['student_id']);
        //     $table->dropForeign('homeworks_student_id_foreign');
        //     $table->dropColumn('student_id');
        });
        Schema::dropIfExists('homeworks');
    }
};
