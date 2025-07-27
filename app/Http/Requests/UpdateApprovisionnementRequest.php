<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApprovisionnementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date' => 'required|date',
            'fournisseur_id' => 'required|exists:fournisseurs,id',
            'user_id' => 'required|exists:users,id',
        ];
    }
}
