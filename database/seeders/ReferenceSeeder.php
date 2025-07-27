<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reference;
use App\Models\Produit;

class ReferenceSeeder extends Seeder
{
    public function run()
    {
        $creme = Produit::where('nom', 'Crème Hydratante')->first();
        $gelDouche = Produit::where('nom', 'Gel Douche')->first();

        Reference::create([
            'code_reference' => 'CRH-001',
            'produit_id' => $creme->id,
        ]);

        Reference::create([
            'code_reference' => 'GD-002',
            'produit_id' => $gelDouche->id,
        ]);
    }
}
