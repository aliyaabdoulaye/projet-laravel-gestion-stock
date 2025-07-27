<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;
use App\Models\Categorie;

class ProduitSeeder extends Seeder
{
    public function run()
    {
        $cosmetiques = Categorie::where('nom', 'Cosmétiques')->first();
        $parfums = Categorie::where('nom', 'Parfums')->first();

        Produit::create([
            'nom' => 'Crème Hydratante',
            'categorie_id' => $cosmetiques->id,
        ]);

        Produit::create([
            'nom' => 'Gel Douche',
            'categorie_id' => $cosmetiques->id,
        ]);

        Produit::create([
            'nom' => 'Eau de Cologne',
            'categorie_id' => $parfums->id,
        ]);
    }
}
