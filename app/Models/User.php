<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;


    protected $fillable = ['nom', 'prenom', 'sexe', 'telephone', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function ventes()
    {
        return $this->hasMany(Vente::class);
    }

    public function approvisionnements()
    {
        return $this->hasMany(Approvisionnement::class);
    }
}
