<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageChapterRequest extends FormRequest
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
            'language_level_id' => 'required|exists:language_levels,id',
            'order' => 'integer|required',
            'chapter' => 'string|required|unique:language_chapters,chapter'
        ];

        if ($this->isMethod("PUT") || $this->isMethod("PATCH")){
            $rules["language_level_id"] = 'nullable|exists:language_levels,id';
            $rules["order"] = 'integer|nullable';
            $rules["chapter"] = 'string|nullable|unique:language_chapters,chapter';
        }

        return $rules;
    }
}
