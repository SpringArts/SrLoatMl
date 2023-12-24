<?php

namespace App\Interfaces\Language;

use App\Models\LanguageChapter;

interface LanguageChapterInterface
{
    public function fetchLanguageChapters(int $limit,int $page);
    public function fetchLanguageChapter(int $id);
    public function store(array $data);
    public function update(array $data, LanguageChapter $languageChapter);
    public function delete(LanguageChapter $languageChapter);
}
