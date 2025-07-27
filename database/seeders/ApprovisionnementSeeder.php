<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Approvisionnement;
use App\Models\Fournisseur;
use App\Models\User;

class ApprovisionnementSeeder extends Seeder
{
    public function run()
    {
        $fournisseurA = Fournisseur::where('nom', 'Fournisseur A')->first();
        $user = User::first(); // Assume qu'il y a un user déjà (à créer avant)

        Approvisionnement::create([
            'date' => '2025-07-20',
            'fournisseur_id' => $fournisseurA->id,
            'user_id' => $user->id,
        ]);
    }
}
