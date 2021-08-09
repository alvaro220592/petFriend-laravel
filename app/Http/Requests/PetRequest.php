<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
            'pet_name' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'sex' => 'required',
            'tutor' => 'required',
            'observations' => 'required',
        ];
    }

    public function messages(){
        return $messages = [
            'pet_name.required' => 'O nome é obrigatório',
            'species.required' => 'A espécie é obrigatória',
            'breed.required' => 'A raça é obrigatória',
            'sex.required' => 'O sexo é obrigatório',
            'tutor.required' => 'O nome do tutor é obrigatório',
            'observations' => 'As observações são obrigatórias'
        ];
    }
}
