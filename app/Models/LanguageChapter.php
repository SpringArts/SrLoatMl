<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageChapter extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function languageLevel()
    {
        return $this->belongsTo(LanguageLevel::class, 'language_level_id');
    }

    public function japaneseLanguageWords()
    {
        return $this->hasMany(JapaneseWord::class);
    }
}
