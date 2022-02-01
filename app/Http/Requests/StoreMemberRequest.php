<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:254',
            'email' => 'required|email|min:2|max:254|unique:members,email',
            'password' => 'required|string|min:6|max:20',
            'core_id' => 'nullable|array',
            'core_id.*' => 'nullable|integer|exists:cores,id',
            'role_id' => 'nullable|exists:roles,id|integer'
        ];
    }

    public function attributes()
    {
        return [
            'name'  => 'nome',
            'email' => 'e-mail',
            'password' => 'senha',
            'core_id' => 'Núcleos',
            'role_id' => 'Cargo',
        ];
    }

    public function messages ()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'min' => 'O campo :attribute precisa ter pelo menos :min caracteres',
            'email' => 'O campo email precisa ser um email',
            'unique' => 'Este :attribute já está cadastrado',
            'exists' => 'O campo :attribute não existe',
        ];
    }
}
