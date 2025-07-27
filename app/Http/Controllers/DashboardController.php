<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vente;
use App\Models\Produit;
use App\Models\AlerteStock;
use App\Models\Fournisseur;
use App\Models\Client;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display the dashboard with stats.
     */
    public function index()
    {
        // Calcul des données principales
        $ventesAujourdHui = Vente::whereDate('created_at', today())->count();
        $produitsEnStock = Produit::sum('quantite');
        $alertesStock = AlerteStock::count();
        $fournisseursCount = Fournisseur::count();
        $clientsCount = Client::count();
        $usersCount = User::count();

        // Retour vers la vue dashboard avec les données
        return view('dashboard', compact(
            'ventesAujourdHui',
            'produitsEnStock',
            'alertesStock',
            'fournisseursCount',
            'clientsCount',
            'usersCount'
        ));
    }
}
