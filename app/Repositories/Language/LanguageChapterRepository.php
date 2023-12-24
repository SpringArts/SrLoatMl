<?php


namespace App\Repositories\Language;


use App\Interfaces\Language\LanguageChapterInterface;
use App\Models\LanguageChapter;

class LanguageChapterRepository implements LanguageChapterInterface
{

    public function fetchLanguageChapters(int $limit, int $page)
    {
        return LanguageChapter::paginate($limit , ["*"] ,"page", $page)->withQueryString();
    }

    public function fetchLanguageChapter(int $id)
    {
        return LanguageChapter::find($id);
    }

    public function store(array $data)
    {
        return LanguageChapter::create($data);
    }

    public function update(array $data, LanguageChapter $languageChapter)
    {
        return $languageChapter->update($data);
    }

    public function delete(LanguageChapter $languageChapter)
    {
        return $languageChapter->delete();
    }
}
