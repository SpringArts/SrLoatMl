<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JapaneseWord extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function languageId()
    {
        return $this->belongsTo(LanguageLevel::class, 'language_level_id');
    }

    public function languageChapter()
    {
        return $this->belongsTo(LanguageChapter::class, 'language_chapter_id');
    }

    public function languageLevel()
    {
        return $this->belongsTo(LanguageLevel::class, 'language_level_id');
    }

}
