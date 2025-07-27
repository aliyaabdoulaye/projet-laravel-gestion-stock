<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReferenceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'code_reference' => 'required|string|max:255|unique:references,code_reference',
            'produit_id' => 'required|exists:produits,id',
        ];
    }
}
