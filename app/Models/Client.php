<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom', 'prenom', 'contact'];

    public function ventes()
    {
        return $this->hasMany(Vente::class);
    }
}
