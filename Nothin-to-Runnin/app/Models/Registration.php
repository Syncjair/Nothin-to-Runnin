<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    use HasFactory;
    protected $table = 'registrations';

    protected $fillable = [
        'name',
        'date_of_birth',
        'gender',
        'residence',
        'phonenumber',
        'email',
        'emergency_contact_name',
        'emergency_contact_phone',
        'emergency_contact_relation',
        'medical_conditions',
        'medication_during_sports',
        'allergies',
        'running_level',
        'running_experience_km',
        'previous_injuries',
        'privacy_agree',
        'photo_agree',
        'terms_agree',
        'signature',
        'registration_date',
    ];

    /**
     * De attributen die als boolean behandeld moeten worden.
     *
     * @var array
     */
    protected $casts = [
        'date_of_birth' => 'date',
        'privacy_agree' => 'boolean',
        'photo_agree' => 'boolean',
        'terms_agree' => 'boolean',
        'registration_date' => 'date',
    ];
}
