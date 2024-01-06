<?php

namespace App\Http\Requests\Board\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
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
            'site_name_ar' => 'required' , 
            'email' => 'required|email' , 
            'mobile' => 'required' , 
            'whatsapp' => 'required' , 
            'address_ar' => 'required' , 
            'youtube' => 'required|url' , 
            'facebook' => 'required|url' , 
            'twitter' => 'required|url' , 
            'instagram' => 'required|url' , 
            'working_hours_ar' => 'required' , 
            'snap_chat' => 'required' , 
            'logo' => 'nullable|image'
        ];
    }
}
