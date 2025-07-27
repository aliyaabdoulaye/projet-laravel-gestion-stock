<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vente;
use App\Models\User;
use App\Models\Client;

class VenteSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();
        $client = Client::first();

        Vente::create([
            'date' => '2025-07-21',
            'montant_total' => 150.00,
            'user_id' => $user->id,
            'client_id' => $client->id,
        ]);
    }
}
