<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLigneVenteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'vente_id' => 'required|exists:ventes,id',
            'lot_produit_id' => 'required|exists:lot_produits,id',
            'quantite' => 'required|integer|min:1',
            'prix_unitaire_applique' => 'required|numeric|min:0',
        ];
    }
}
