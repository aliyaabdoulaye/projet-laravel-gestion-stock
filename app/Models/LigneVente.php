<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LigneVente extends Model
{
    protected $fillable = ['vente_id', 'lot_produit_id', 'quantite', 'prix_unitaire_applique'];

    public function vente()
    {
        return $this->belongsTo(Vente::class);
    }

    public function lotProduit()
    {
        return $this->belongsTo(LotProduit::class);
    }
}
