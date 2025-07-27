<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LigneVente;
use App\Models\Vente;
use App\Models\LotProduit;

class LigneVenteSeeder extends Seeder
{
    public function run()
    {
        $vente = Vente::first();
        $lot = LotProduit::first();

        LigneVente::create([
            'vente_id' => $vente->id,
            'lot_produit_id' => $lot->id,
            'quantite' => 2,
            'prix_unitaire_applique' => 15.50,
        ]);
    }
}
