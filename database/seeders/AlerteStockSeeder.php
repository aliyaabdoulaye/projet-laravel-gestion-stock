<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AlerteStock;
use App\Models\Reference;

class AlerteStockSeeder extends Seeder
{
    public function run()
    {
        $refCreme = Reference::where('code_reference', 'CRH-001')->first();

        AlerteStock::create([
            'reference_id' => $refCreme->id,
            'quantite' => 100,
            'quantite_seuil' => 20,
            'notification' => 'Stock faible pour Crème Hydratante',
        ]);
    }
}
