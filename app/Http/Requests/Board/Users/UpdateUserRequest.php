<?php

namespace App\Http\Requests\Board\Users;

use Illuminate\Foundation\Http\FormRequest;
use Request;
class UpdateUserRequest extends FormRequest
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
        $id = Request::segment(3);
        return [
            'name' => 'required' , 
            'password' => 'nullable|confirmed|min:8' , 
            'email' => 'required|email|unique:users,email,'.$id,
            'active'=> 'nullable'
        ];
    }
}
