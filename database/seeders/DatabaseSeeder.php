<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategorieSeeder::class,
            ProduitSeeder::class,
            ReferenceSeeder::class,
            LotProduitSeeder::class,
            AlerteStockSeeder::class,
            FournisseurSeeder::class,
            ApprovisionnementSeeder::class,
            LigneApprovisionnementSeeder::class,
            ClientSeeder::class,
            VenteSeeder::class,
            LigneVenteSeeder::class,
            FactureSeeder::class,
        ]);
    }

}
