<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Gerant
        $gerant = User::create([
            'nom' => 'Abdoulaye',
            'prenom' => 'Aliya',
            'sexe' => 'F',
            'telephone' => '1234567890',
            'email' => 'aliya@example.com',
            'password' => Hash::make('password123'),
        ]);
        $gerant->assignRole('Gerant');

        // Employé
        $employe = User::create([
            'nom' => 'Jean',
            'prenom' => 'Doe',
            'sexe' => 'M',
            'telephone' => '0987654321',
            'email' => 'employe@example.com',
            'password' => Hash::make('password123'),
        ]);
        $employe->assignRole('Employe');


    }
}
