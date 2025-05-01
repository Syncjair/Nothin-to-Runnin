<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccesController extends Controller
{
    public function index()
    {
        $registrations = Registration::simplePaginate(5);
        $user = Auth::user();
        return view('inzien.index', ['registrations' => $registrations, 'user' => $user]);
    }

    public function show($id)
    {
        $registration = Registration::findOrFail($id);
        return view('inzien.details', ['registration' => $registration]);
    }

    public function delete($id)
    {
        $registration = Registration::findOrFail($id);
        return view('inzien.delete', ['registration' => $registration]);
    }

    public function destroy($id)
    {
        $registration = Registration::findOrFail($id);
        $name = $registration->name;
        if ($registration->delete()) {
            return redirect()->route('inzien')->with('success', 'De inschrijving van ' . $name . ' is succesvol verwijderd.');
        } else {
            return redirect()->route('inzien')->with('error', 'De inschrijving van ' . $name . ' is niet succesvol verwijderd.');
        }
        
        return redirect()->route('inzien')->with('error', 'De inschrijving van ' . $name . ' is niet succesvol verwijderd.'); 
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $user = Auth::user();
        
        $query = Registration::query();
        
        if ($search) {
            $query->where(function($q) use ($search) {

                $q->where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->orWhere('residence', 'LIKE', "%{$search}%")
                ->orWhere('phonenumber', 'LIKE', "%{$search}%")
                ->orWhere('gender', 'LIKE', "%{$search}%")
                
                ->orWhere('emergency_contact_name', 'LIKE', "%{$search}%")
                ->orWhere('emergency_contact_phone', 'LIKE', "%{$search}%")
                ->orWhere('emergency_contact_relation', 'LIKE', "%{$search}%")
                
                ->orWhere('medical_conditions', 'LIKE', "%{$search}%")
                ->orWhere('medication_during_sports', 'LIKE', "%{$search}%")
                ->orWhere('allergies', 'LIKE', "%{$search}%")
                
                ->orWhere('running_level', 'LIKE', "%{$search}%")
                ->orWhere('running_experience_km', 'LIKE', "%{$search}%")
                ->orWhere('previous_injuries', 'LIKE', "%{$search}%");
            });
        }
        
        $registrations = $query->paginate(5);
        
        return view('inzien.index', compact('registrations', 'search', 'user'));
    }
}
