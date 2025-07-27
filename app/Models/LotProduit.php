<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LotProduit extends Model
{
    protected $fillable = ['quantite', 'date_peremption', 'prix_unitaire', 'reference_id'];

    public function reference()
    {
        return $this->belongsTo(Reference::class);
    }

    public function ligneApprovisionnements()
    {
        return $this->hasMany(LigneApprovisionnement::class);
    }

    public function ligneVentes()
    {
        return $this->hasMany(LigneVente::class);
    }
}
