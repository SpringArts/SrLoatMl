<?php

namespace App\Http\Requests;

use App\Rules\ExistsInJapaneseWordTable;
use Illuminate\Foundation\Http\FormRequest;

class ExamResultRequest extends FormRequest
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
            'data.*.id' => ['required','integer', new ExistsInJapaneseWordTable()],
            'data.*.answer' => 'nullable|string|max:50'
        ];
    }
}
