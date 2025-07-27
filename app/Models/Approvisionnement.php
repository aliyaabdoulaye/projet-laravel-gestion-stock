<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approvisionnement extends Model
{
    protected $fillable = ['date', 'fournisseur_id', 'user_id'];

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ligneApprovisionnements()
    {
        return $this->hasMany(LigneApprovisionnement::class);
    }
}
