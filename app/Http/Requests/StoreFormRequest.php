<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'nullable|min:20',
            'about' => 'required',
            'phone' => 'required',
            'whatsapp' => 'required',
        ];
    }


    public function messages() {
        return [
            'required' => 'Este campo é orbigatório',
            'min' => 'Este campo recisa de pelo menos :min caracteres'
        ];
    }
}
