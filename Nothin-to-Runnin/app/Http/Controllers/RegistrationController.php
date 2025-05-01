<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|in:man,vrouw,anders',
            'residence' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:20',
            'email' => 'required|email|unique:registrations,email',
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_phone' => 'required|string|max:20',
            'emergency_contact_relation' => 'required|string|max:255',
            'medical_conditions' => 'nullable|string',
            'medication_during_sports' => 'nullable|string',
            'allergies' => 'nullable|string',
            'running_level' => 'required|in:beginner,gevorderd,wedstrijdloper',
            'running_experience_km' => 'nullable|string|max:255',
            'previous_injuries' => 'nullable|string|max:255',
            'privacy_agree' => 'required|accepted',
            'photo_agree' => 'required|accepted',
            'terms_agree' => 'required|accepted',
            'signature' => 'required|string',
            'registration_date' => 'required|date',
        ]);

        $registration = Registration::create([
            'name' => $validatedData['name'],
            'date_of_birth' => $validatedData['date_of_birth'],
            'gender' => $validatedData['gender'],
            'residence' => $validatedData['residence'],
            'phonenumber' => $validatedData['phonenumber'],
            'email' => $validatedData['email'],
            'emergency_contact_name' => $validatedData['emergency_contact_name'],
            'emergency_contact_phone' => $validatedData['emergency_contact_phone'],
            'emergency_contact_relation' => $validatedData['emergency_contact_relation'],
            'medical_conditions' => $validatedData['medical_conditions'] ?? null,
            'medication_during_sports' => $validatedData['medication_during_sports'] ?? null,
            'allergies' => $validatedData['allergies'] ?? null,
            'running_level' => $validatedData['running_level'],
            'running_experience_km' => $validatedData['running_experience_km'] ?? null,
            'previous_injuries' => $validatedData['previous_injuries'] ?? null,
            'privacy_agree' => $validatedData['privacy_agree'] ? true : false,
            'photo_agree' => $validatedData['photo_agree'] ? true : false,
            'terms_agree' => $validatedData['terms_agree'] ? true : false,
            'signature' => $validatedData['signature'] ?? null,
            'registration_date' => $validatedData['registration_date'],
        ]);
        
        if (!$registration) {
            return back()->withInput()->withErrors(['error' => 'Er is iets misgegaan met je registratie. Probeer het opnieuw.']);
        }

        return redirect()->route('home')->with('success', 'Je registratie is succesvol verwerkt!');
    }
}
