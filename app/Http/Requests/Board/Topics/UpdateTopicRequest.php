<?php

namespace App\Http\Requests\Board\Topics;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTopicRequest extends FormRequest
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
            'title' => 'required' , 
            'content' => 'required' , 
            'image' => 'nullable|image' , 
            'is_active' => 'nullable' , 
            'tags' => 'nullable' , 
        ];
    }
}