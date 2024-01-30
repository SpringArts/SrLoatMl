<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageLevelRequest extends FormRequest
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
            "language_id" => "required|integer|exists:languages,id",
            "level" => "required|unique:language_levels,level",
            "order" => "required|integer"
        ];

        if ($this->isMethod("PUT") || $this->isMethod("PATCH")){
            $rules["language_id"] = "nullable|integer|exists:languages,id";
            $rules["level"] = "nullable|unique:language_levels,level";
            $rules["order"] = "nullable|integer";
        }

        return $rules;
    }
}
