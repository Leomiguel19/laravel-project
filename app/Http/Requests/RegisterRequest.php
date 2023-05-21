<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' =>'required',
            'username' =>'required|unique:users',
            'email' =>'required|unique:users,email',
            'password' =>'required|min:8',
            'password_confirmation' =>'required|same:password',
            'phone' => 'required|numeric',
            // 'image' => 'required'
        ];
    }

    
    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'username.required' => 'El nombre de usuario es obligatorio.',
            'username.unique' => 'Este nombre de usuario ya se encuentra registrado.',
            'email.unique' => 'Este correo electronico ya se encuentra registrado.',
            'password_confirmation' => 'Las contraseñas no coinciden.',
            'password.min' => 'Las contraseña debe tener minimo 8 caracteres.',
        ];
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(response()->json([
    //         'errors' => $validator->errors(),
    //         'status' => true
    //     ], 422));
    // }
}
