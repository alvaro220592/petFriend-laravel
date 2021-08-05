<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'client_name' => 'required',
            'client_lastname' => 'required',
            'phone' => 'required',
            'email' => ['required', 'email', 'email' => 'unique:emails,email,{$this->id}',],
            'zipcode' => 'required',
            'street' => 'required',
            'address_num' => 'required',
            'city' => 'required',
            'initials' => 'required',
        ];
    }
}
