<?php

namespace App\Http\Requests\Board\Offers;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOfferRequest extends FormRequest
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
            'name_en' => 'required' , 
            'name_ar' => 'required' , 
            'content_en' => 'required' , 
            'content_ar' => 'required' , 
            'active' => 'nullable'
        ];
    }
}
