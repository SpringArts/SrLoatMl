<?php


namespace App\UseCases\Language;

use App\Interfaces\Language\LanguageInterface;
use App\Models\Language;

class LanguageAction
{
    private $languageRepository;

    public function __construct(LanguageInterface $languageRepository)
    {
        $this->languageRepository = $languageRepository;
    }

    public function fetchAllLanguages()
    {
        $limit = request()->limit ?? 10;
        $page = request()->page ?? 1;
        $data = $this->languageRepository->fetchLanguages($limit, $page);
        return $data;
    }

    public function store(array $data)
    {
        return $this->languageRepository->store($data);
    }

    public function show(int $id)
    {
        return $this->languageRepository->fetchLanguage($id);
    }

    public function update(array $data, Language $language)
    {
        return $this->languageRepository->update($data, $language);
    }

    public function delete(Language $language)
    {
        return $this->languageRepository->delete($language);
    }
}
