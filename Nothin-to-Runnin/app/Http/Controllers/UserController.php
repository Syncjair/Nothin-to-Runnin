<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function edit($id)
    {
        $user = Auth::user();
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $rules = [
            'username' => 'nullable|string|max:255|unique:users,username,' . $id,
            'password' => 'nullable|string',
        ];

        $validatedData = $request->validate($rules);

        if ($request->filled('username')) {
            $user->username = $validatedData['username'];
        }

        if ($request->filled('password')) {
            $user->password = bcrypt($validatedData['password']);
        }

        $user->save();

        return redirect()->route('user')->with('success', 'De user is succesvol geupdate.');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string',
        ]);

        $user = new User();
        $user->username = $validateData['username'];
        $user->password = bcrypt($validateData['password']);
        $user->save();

        return redirect()->route('user')->with('success', 'De Nieuwe gebruiker is succesvol aangemaakt.');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        return view('user.delete', ['user' => $user]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $username = $user->username;

        if ($user->delete()) {
            return redirect()->route('user')->with('success', 'De gebruiker ' . $username . ' is succesvol verwijderd.');
        } else {
            return redirect()->route('inzien')->with('error', 'De gebruiker ' . $username . ' is niet succesvol verwijderd.');
        }
    }
}
