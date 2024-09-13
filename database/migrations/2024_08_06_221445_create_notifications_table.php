<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('notification_id');
            $table->foreignId('user_id')->constrained('users');
            $table->string('title'); // Add this line for the title column
            $table->text('message');
            $table->boolean('read_status')->default(false);
            $table->string('notification_type', 50)->nullable(); // e.g., 'Alert', 'Reminder'
            $table->string('media', 255)->nullable(); // File path for related media
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
