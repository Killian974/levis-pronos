<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newUserNewletterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Contrôle de l'email envoyer par l'utilisateur qui s'inscrit à notre newsletter
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|regex:/^([\w\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i'
        ];
    }
}
