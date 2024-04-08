<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' =>'required|string|min:2|max:255',
            'surname' =>'required|string|min:2|max:255',
            'patronimic' =>'string|min:2|max:255',
            'login' =>'required|string|min:2|max:255|unique:users,login',
            'password' => 'required|string|min:8|max:255|same:re_password',
            'checkbox-rule' => 'accepted',
            're_password' => 'required|string',
        ];
    }
}
