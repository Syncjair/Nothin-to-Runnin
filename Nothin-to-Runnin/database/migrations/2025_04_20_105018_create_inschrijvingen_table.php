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
        Schema::create('inschrijvingen', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('date_of_birth');
            $table->string('residence');
            $table->string('phonenumber');
            $table->string('email')->unique();
            $table->string('gender');

            $table->date('registration_date')->nullable();
            
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('emergency_contact_relation')->nullable();
            
            $table->text('medical_conditions')->nullable();
            $table->text('medication_during_sports')->nullable();
            $table->text('allergies')->nullable();
            
            $table->enum('running_level', ['beginner', '', 'advanced'])->default('beginner');
            $table->boolean('has_running_experience')->default(false);
            $table->integer('running_experience_km')->nullable();
            $table->string('average_pace')->nullable();
            $table->text('previous_injuries')->nullable();
            $table->text('running_ambitions')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
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
