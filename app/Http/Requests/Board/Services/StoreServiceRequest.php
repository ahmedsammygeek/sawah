<?php

namespace App\Http\Requests\Board\Services;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'name_ar' => 'required' , 
            'subtitle_ar' => 'required' , 
            'content_ar' => 'required' , 
            'image' => 'required|image' , 
            'is_active' => 'nullable',
        ];
    }
}
