<?php


namespace App\Usecases\Language;


use App\Interfaces\Language\LanguageInterface;
use App\Models\Language;

class LanguageAction
{
    private $languageRespository;

    public function __construct (LanguageInterface $languageRespository)
    {
        $this->languageRespository = $languageRespository;
    }

    public function fetchAllLanguages()
    {
        $limit = request()->limit ?? 10;
        $page = request()->page ?? 1;
        $data = $this->languageRespository->fetchLanguages($limit, $page);
        return $data;
    }

    public function store(array $data)
    {
        return $this->languageRespository->store($data);
    }

    public function show(int $id)
    {
        return $this->languageRespository->fetchLanguage($id);
    }

    public function update(array $data, Language $language)
    {
        return $this->languageRespository->update($data, $language);
    }

    public function delete(Language $language)
    {
        return $this->languageRespository->delete($language);
    }
}
