<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\LotProduitController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ApprovisionnementController;
use App\Http\Controllers\LigneApprovisionnementController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\LigneVenteController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\AlerteStockController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware(['auth'])->group(function () {

    // Profil - tous rôles confondus
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Gestion spécifique Gerant
    Route::middleware(['role:Gerant'])->group(function () {
        Route::resource('categories', CategorieController::class);
        Route::resource('produits', ProduitController::class);
        Route::resource('references', ReferenceController::class);
        Route::resource('lot-produits', LotProduitController::class);
        Route::resource('fournisseurs', FournisseurController::class);
        Route::resource('approvisionnements', ApprovisionnementController::class);
        Route::resource('ligne-approvisionnements', LigneApprovisionnementController::class);
        Route::resource('alerte-stocks', AlerteStockController::class);

        // Ajout UserController uniquement Gerant
        Route::resource('users', UserController::class);
    });

    // Accès Employe ou Gerant
    Route::middleware(['role:Employe|Gerant'])->group(function () {
        Route::resource('clients', ClientController::class);
        Route::resource('ventes', VenteController::class);
        Route::resource('ligne-ventes', LigneVenteController::class);
        Route::resource('factures', FactureController::class);
    });
});

require __DIR__.'/auth.php';
