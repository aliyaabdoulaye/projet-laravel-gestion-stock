<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = ['date', 'montant', 'vente_id'];

    public function vente()
    {
        return $this->belongsTo(Vente::class);
    }
}
