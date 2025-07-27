<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLotProduitRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'quantite' => 'required|integer|min:0',
            'date_peremption' => 'nullable|date',
            'prix_unitaire' => 'required|numeric|min:0',
            'reference_id' => 'required|exists:references,id',
        ];
    }
}
