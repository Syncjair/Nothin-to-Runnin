<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create exactly the two users we need
        User::create([
            'username' => 'Ruthley',
            'password' => Hash::make('geheim'),
        ]);

        User::create([
            'username' => 'Rose',
            'password' => Hash::make('geheim'),
        ]);
    }
}
