<?php

namespace App\UseCases\Language;

use App\Interfaces\Language\LanguageLevelInterface;
use App\Models\LanguageLevel;

class LanguageLevelAction{

    private $languageLevelRepository;

    public function __construct(LanguageLevelInterface $languageLevelRepository)
    {
        $this->languageLevelRepository = $languageLevelRepository;
    }

    public function fetchAllLanguageLevels()
    {
        $limit = request()->limit ?? 10;
        $page = request()->page ?? 1;
        return $this->languageLevelRepository->fetchLanguageLevels($limit , $page);
    }

    public function fetchLanguageLevel($id)
    {
        return $this->languageLevelRepository->fetchLanguageLevel($id);
    }

    public function store(array $data)
    {
        return $this->languageLevelRepository->store($data);
    }

    public function update(LanguageLevel $languageLevel, array $data)
    {
        return $this->languageLevelRepository->update($data , $languageLevel);
    }

    public function delete(LanguageLevel $languageLevel)
    {
        return $this->languageLevelRepository->delete($languageLevel);
    }
}
