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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Full name of the user
            $table->string('email')->unique(); // Unique email address
            $table->timestamp('email_verified_at')->nullable(); // Email verification timestamp
            $table->string('password'); // Encrypted password
            $table->string('user_type')->default('student'); // Default user type
            $table->string('phone_number')->nullable(); // Optional phone number
            $table->string('address')->nullable(); // Optional address
            $table->string('address_line_2')->nullable(); // Second address line (if needed)
            $table->string('city')->nullable(); // City of residence
            $table->string('state')->nullable(); // State or province
            $table->string('postal_code')->nullable(); // Postal or ZIP code
            $table->string('country')->nullable(); // Country of residence
            $table->date('birthdate')->nullable(); // Date of birth
            $table->string('gender')->nullable(); // Gender of the user
            $table->string('profile_picture')->nullable(); // URL or path to the profile picture
            $table->text('bio')->nullable(); // Short bio or description
            $table->string('nationality')->nullable(); // Nationality
            $table->string('emergency_contact_name')->nullable(); // Emergency contact name
            $table->string('emergency_contact_phone')->nullable(); // Emergency contact phone number
            $table->string('occupation')->nullable(); // Occupation or job title
            $table->string('company')->nullable(); // Company or organization name
            $table->string('social_media_link')->nullable(); // Link to social media profile
            $table->string('linkedin_profile')->nullable(); // LinkedIn profile URL
            $table->string('website')->nullable(); // Personal or business website URL
            $table->text('additional_information')->nullable(); // Any other relevant information
            $table->boolean('is_active')->default(true); // Status of the user account
            $table->boolean('is_verified')->default(false); // Verification status
            $table->boolean('is_admin')->default(false); // Admin status for access control
            $table->rememberToken(); // Token for "remember me" functionality
            $table->timestamps(); // Created and updated timestamps
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Email associated with the reset token
            $table->string('token'); // Reset token
            $table->timestamp('created_at')->nullable(); // Token creation timestamp
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Session ID
            $table->foreignId('user_id')->nullable()->index(); // Foreign key for user ID
            $table->string('ip_address', 45)->nullable(); // IP address of the user
            $table->text('user_agent')->nullable(); // User agent information
            $table->longText('payload'); // Session payload data
            $table->integer('last_activity')->index(); // Timestamp of the last activity
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
