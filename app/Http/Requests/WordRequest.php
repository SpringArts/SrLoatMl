<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'hiragana' => 'required|string|max:50',
            'kanji' => 'required|string|max:50',
            'romaji' => 'required|string|max:50',
            'english' => 'required|string|max:50',
            'language_level_id' => 'required|exists:language_levels,id|integer',
            'language_chapter_id' => 'required|exists:language_chapters,id|integer'
        ];
        if($this->isMethod("PUT") || $this->isMethod("PATCH")){
            $rules['hiragana'] = 'nullable|string|max:50';
            $rules['kanji'] = 'nullable|string|max:50';
            $rules['romaji'] = 'nullable|string|max:50';
            $rules['english'] = 'nullable|string|max:50';
            $rules['language_level_id'] = 'nullable|exists:language_levels,id|integer';
            $rules['language_chapter_id'] = 'nullable|exists:language_chapters,id|integer';
        }
        return $rules;
    }
}
