<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facture;
use App\Models\Vente;

class FactureSeeder extends Seeder
{
    public function run()
    {
        $vente = Vente::first();

        Facture::create([
            'date' => '2025-07-21',
            'montant' => $vente->montant_total,
            'vente_id' => $vente->id,
        ]);
    }
}
