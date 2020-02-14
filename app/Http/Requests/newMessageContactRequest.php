<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newMessageContactRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'email' => 'required|email|regex:/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i',
            'subject' => 'required|string',
            'content' => 'required|string',
        ];
    }
}
