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
            'client_name.required' => 'O campo de nome é obrigatório',
            'client_lastname.required' => 'O campo de sobrenome é obrigatório',
            'phone.required' => 'O campo de telefone é obrigatório',
            'email.required' => 'O campo de email é obrigatório',
            'zipcode.required' => 'O campo de CEP é obrigatório',
            'street.required' => 'O campo de logradouro é obrigatório',
            'address_num.required' => 'O campo de nº residencial é obrigatório',
            'city.required' => 'O campo de cidade é obrigatório',
            'initials.required' => 'O campo de UF é obrigatório',

            // Alpha(apenas letras)
            'client_name.alpha' => 'No nome insira apenas letras',
            'client_lastname.alpha' => 'No sobrenome insira apenas letras',

            // Numeric
            'phone.numeric' => "No telefone digite apenas números",

            // Email
            'email.email' => 'Insira um email com formato válido',

            // Min
            'initials.min' => 'A UF deve ter no mínimo 2 caracteres',

            // Max
            'initials.max' => 'A UF deve ter no máximo 2 caracteres',

        ];
    }
}
