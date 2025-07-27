<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLigneApprovisionnementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'approvisionnement_id' => 'required|exists:approvisionnements,id',
            'lot_produit_id' => 'required|exists:lot_produits,id',
            'quantite' => 'required|integer|min:1',
        ];
    }
}
