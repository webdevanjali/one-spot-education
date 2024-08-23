<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_attendees', function (Blueprint $table) {
            $table->id('event_attendee_id');
            $table->foreignId('event_id')->references('event_id')->on('events');
            $table->foreignId('user_id')->constrained('users');
            $table->time('joined_at');
            $table->string('attendance_status')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_attendees');
    }
};
