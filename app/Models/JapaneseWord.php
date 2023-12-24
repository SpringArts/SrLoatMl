<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JapaneseWord extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function languageChapter()
    {
        return $this->belongsTo(LanguageChapter::class, 'language_chapter_id');
    }

    public function examResults()
    {
        return $this->hasMany(ExamResult::class, 'japanese_word_id');
    }
}
