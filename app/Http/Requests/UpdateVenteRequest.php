<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVenteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date' => 'required|date',
            'montant_total' => 'required|numeric|min:0',
            'user_id' => 'required|exists:users,id',
            'client_id' => 'required|exists:clients,id',
        ];
    }
}
