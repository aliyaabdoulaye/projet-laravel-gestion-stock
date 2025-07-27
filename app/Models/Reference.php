<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $fillable = ['code_reference', 'produit_id'];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }

    public function lotProduits()
    {
        return $this->hasMany(LotProduit::class);
    }

    public function alerteStock()
    {
        return $this->hasOne(AlerteStock::class);
    }
}
