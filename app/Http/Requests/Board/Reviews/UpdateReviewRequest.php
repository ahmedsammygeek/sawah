<?php

namespace App\Http\Requests\Board\Reviews;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReviewRequest extends FormRequest
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
            'image' => 'nullable|image' , 
            'name' => 'required', 
            'content_ar' => 'required' , 
            'rate' => 'required' , 
            'is_active' => 'nullable' , 
        ];
    }
}
