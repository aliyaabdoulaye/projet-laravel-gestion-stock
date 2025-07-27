<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFactureRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date' => 'required|date',
            'montant' => 'required|numeric|min:0',
            'vente_id' => 'required|exists:ventes,id',
        ];
    }
}
