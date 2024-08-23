<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('qualification_proofs', function (Blueprint $table) {
            $table->id('proof_id');
            $table->foreignId('user_id')->constrained('users');
            $table->string('qualification_type', 100);
            $table->string('proof_file', 255);
            $table->date('upload_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('qualification_proofs');
    }
};
