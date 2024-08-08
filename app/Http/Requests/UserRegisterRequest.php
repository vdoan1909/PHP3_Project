<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "bail|required|max:100",
            "email" => "bail|required|email|unique:users,email",
            // "password" => "bail|required|min:8|confirmed",
            "password" => "bail|required|min:8",
            "password_confirmation" => "required|same:password"
        ];
    }
}
