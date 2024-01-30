<?php

namespace App\Interfaces\Language;

use App\Models\LanguageLevel;

interface LanguageLevelInterface{
    public function fetchLanguageLevels(int $limit, int $page);
    public function fetchLanguageLevel(int $id);
    public function store(array $data);
    public function update(array $data, LanguageLevel $languageLevel);
    public function delete(LanguageLevel $languageLevel);
}
