<?php

namespace App\Repositories\Language;

use App\Interfaces\Language\LanguageLevelInterface;
use App\Models\LanguageLevel;

class LanguageLevelRepository implements LanguageLevelInterface
{

    public function fetchLanguageLevels(int $limit, int $page)
    {
        return LanguageLevel::paginate($limit, ["*"], "page", $page)->withQueryString();
    }

    public function fetchLanguageLevel(int $id)
    {
        return LanguageLevel::find($id);
    }

    public function store(array $data)
    {
        return LanguageLevel::create($data);
    }

    public function update(array $data, LanguageLevel $languageLevel)
    {
        return $languageLevel->update($data);
    }

    public function delete(LanguageLevel $languageLevel)
    {
        return $languageLevel->delete();
    }
}
