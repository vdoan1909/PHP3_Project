<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "email" => "required|email|unique:users,email, $this->user_id",
            "age" => "present|digits_between:18,100",
            "avatar" => "present|mimes:jpeg, png, jpg|max:2048"
        ];
    }

    public $user_id;
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
}
