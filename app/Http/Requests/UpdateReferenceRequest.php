<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReferenceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $referenceId = $this->route('reference'); // ou adapte selon ta route

        return [
            'code_reference' => 'required|string|max:255|unique:references,code_reference,' . $referenceId,
            'produit_id' => 'required|exists:produits,id',
        ];
    }
}
