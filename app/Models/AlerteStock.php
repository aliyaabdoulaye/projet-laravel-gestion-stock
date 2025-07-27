<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlerteStock extends Model
{
    protected $fillable = ['reference_id', 'quantite', 'quantite_seuil', 'notification'];

    public function reference()
    {
        return $this->belongsTo(Reference::class);
    }
}
