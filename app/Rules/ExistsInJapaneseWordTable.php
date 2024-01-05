<?php

namespace App\Rules;

use App\Models\JapaneseWord;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ExistsInJapaneseWordTable implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(!JapaneseWord::where('id' , $value)->exists()){
            $fail("The id doesn't existed in the table");
        }
    }
}
