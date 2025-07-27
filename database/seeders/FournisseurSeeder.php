<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fournisseur;

class FournisseurSeeder extends Seeder
{
    public function run()
    {
        Fournisseur::create([
            'nom' => 'Fournisseur A',
            'contact' => 'contact@fourna.com',
        ]);

        Fournisseur::create([
            'nom' => 'Fournisseur B',
            'contact' => '+225 00 11 22 33',
        ]);
    }
}
