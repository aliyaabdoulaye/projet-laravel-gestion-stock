<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    public function run()
    {
        Categorie::create([
            'nom' => 'Cosmétiques',
            'description' => 'Produits de beauté et soins',
        ]);

        Categorie::create([
            'nom' => 'Parfums',
            'description' => 'Parfums et fragrances',
        ]);
    }
}
