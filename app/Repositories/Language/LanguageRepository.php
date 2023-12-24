<?php

namespace App\Repositories\Language;

use App\Interfaces\Language\LanguageInterface;
use App\Models\Language;

class LanguageRepository implements LanguageInterface
{

    public function fetchLanguages(int $limit, int $page)
    {
        return Language::paginate($limit, ['*'], 'page', $page)->withQueryString();
    }

    public function fetchLanguage(int $id)
    {
        return Language::find($id);
    }

    public function store(array $data)
    {
        return Language::create($data);
    }

    public function update(array $data, Language $language)
    {
        return $language->update($data);
    }

    public function delete(Language $language)
    {
        return $language->delete();
    }
}
