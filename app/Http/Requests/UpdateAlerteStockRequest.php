<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAlerteStockRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'reference_id' => 'required|exists:references,id',
            'quantite' => 'required|integer|min:0',
            'quantite_seuil' => 'required|integer|min:0',
            'notification' => 'required|string',
        ];
    }
}
