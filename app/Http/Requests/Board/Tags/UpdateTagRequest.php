<?php

namespace App\Http\Requests\Board\Tags;

use Illuminate\Foundation\Http\FormRequest;
use Request;
class UpdateTagRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $id = Request::segment(3);
        return [
            'name' => 'required|unique:tags,name->ar,'.$id , 
            'is_active' => 'nullable' , 
        ];
    }
}
