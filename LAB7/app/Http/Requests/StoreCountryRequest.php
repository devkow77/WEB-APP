<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCountryRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:countries,code',
            'currency' => 'required|string|max:50',
            'area' => 'required|numeric|min:0',
            'language' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
       return [
        'name.required' => 'Pole nazwa jest wymagane.',
        'code.required' => 'Pole kod jest wymagane.',
        'code.unique' => 'Taki kod już istnieje.',
        'currency.required' => 'Pole waluta jest wymagane.',
        'area.required' => 'Pole powierzchnia jest wymagane.',
        'language.required' => 'Pole język jest wymagane.',
       ]; 
    }
}
