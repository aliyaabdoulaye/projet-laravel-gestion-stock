<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LigneApprovisionnement extends Model
{
    protected $fillable = ['approvisionnement_id', 'lot_produit_id', 'quantite'];

    public function approvisionnement()
    {
        return $this->belongsTo(Approvisionnement::class);
    }

    public function lotProduit()
    {
        return $this->belongsTo(LotProduit::class);
    }
}
