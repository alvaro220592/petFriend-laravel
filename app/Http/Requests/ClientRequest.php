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
            'client_name' => ['required', 'alpha'],
            'client_lastname' => 'required|alpha',
            'phone' => 'required | numeric',
            'email' => ['required', 'email', 'email' => 'unique:emails,email,{$this->id}',],
            'zipcode' => 'required',
            'street' => 'required',
            'address_num' => 'required',
            'city' => 'required',
            'initials' => 'required | min:2 | max:2',
        ];
    }

    public function messages(){

        return $messages = [

            // Required
            'client_name.required' => 'O nome é obrigatório',
            'client_lastname.required' => 'O sobrenome é obrigatório',
            'phone.required' => 'O telefone é obrigatório',
            'email.required' => 'O email é obrigatório',
            'zipcode.required' => 'O CEP é obrigatório',
            'street.required' => 'O logradouro é obrigatório',
            'address_num.required' => 'O nº residencial é obrigatório',
            'city.required' => 'O cidade é obrigatória',
            'initials.required' => 'A UF é obrigatória',

            // Alpha(apenas letras)
            'client_name.alpha' => 'No nome insira apenas letras',
            'client_lastname.alpha' => 'No sobrenome insira apenas letras',

            // Numeric
            'phone.numeric' => "No telefone digite apenas números",

            // Email
            'email.email' => 'Insira um email com formato válido',

            // Min
            'initials.min' => 'A UF deve 2 caracteres',

            // Max
            'initials.max' => 'A UF deve ter 2 caracteres',

        ];
    }
}
