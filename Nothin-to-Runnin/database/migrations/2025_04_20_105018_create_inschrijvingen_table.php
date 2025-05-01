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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('residence');
            $table->string('phonenumber');
            $table->string('email')->unique();
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone');
            $table->string('emergency_contact_relation');
            $table->text('medical_conditions')->nullable();
            $table->text('medication_during_sports')->nullable();
            $table->text('allergies')->nullable();
            $table->string('running_level');
            $table->string('running_experience_km')->nullable();
            $table->text('previous_injuries')->nullable();
            $table->boolean('privacy_agree')->default(false);
            $table->boolean('photo_agree')->default(false);
            $table->boolean('terms_agree')->default(false);
            $table->text('signature')->nullable();
            $table->date('registration_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inschrijvingen');
    }
};
