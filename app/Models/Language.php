<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function languageLevels()
    {
        return $this->hasMany(LanguageLevel::class);
    }

    public function examRecords()
    {
        return $this->hasMany(ExamRecord::class);
    }
}
