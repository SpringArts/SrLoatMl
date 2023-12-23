<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends FormRequest
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
        $rules = [
            'name' => "required|unique:languages,name",
            'total_level' => "required|integer"
        ];

        if ($this->isMethod('PUT') || $this->isMethod('PATCH')){
            $rules['name'] = "nullable|unique";
            $rules['total_level'] = "nullable|unique";
        }

        return $rules;
    }
}
