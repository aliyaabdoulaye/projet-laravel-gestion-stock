<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LotProduit;
use App\Models\Reference;

class LotProduitSeeder extends Seeder
{
    public function run()
    {
        $refCreme = Reference::where('code_reference', 'CRH-001')->first();
        $refGel = Reference::where('code_reference', 'GD-002')->first();

        LotProduit::create([
            'quantite' => 100,
            'date_peremption' => '2026-12-31',
            'prix_unitaire' => 15.50,
            'reference_id' => $refCreme->id,
        ]);

        LotProduit::create([
            'quantite' => 50,
            'date_peremption' => '2026-06-30',
            'prix_unitaire' => 8.20,
            'reference_id' => $refGel->id,
        ]);
    }
}
