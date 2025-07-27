<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LigneApprovisionnement;
use App\Models\Approvisionnement;
use App\Models\LotProduit;

class LigneApprovisionnementSeeder extends Seeder
{
    public function run()
    {
        $appro = Approvisionnement::first();
        $lot = LotProduit::first();

        LigneApprovisionnement::create([
            'approvisionnement_id' => $appro->id,
            'lot_produit_id' => $lot->id,
            'quantite' => 50,
        ]);
    }
}
