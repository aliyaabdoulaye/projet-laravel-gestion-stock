<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run()
    {
        Client::create([
            'nom' => 'Diallo',
            'prenom' => 'Moussa',
            'contact' => 'diallo@example.com',
        ]);

        Client::create([
            'nom' => 'Sow',
            'prenom' => 'Fatou',
            'contact' => 'fatou@example.com',
        ]);
    }
}
