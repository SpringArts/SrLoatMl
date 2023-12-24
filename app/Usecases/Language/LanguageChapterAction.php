<?php


namespace App\Usecases\Language;


use App\Interfaces\Language\LanguageChapterInterface;
use App\Models\LanguageChapter;

class LanguageChapterAction
{
    private $languageChapterRepository;

    public function __construct(LanguageChapterInterface $languageChapterRepository)
    {
        $this->languageChapterRepository = $languageChapterRepository;
    }

    public function fetchLanguageChapters()
    {
        $limit = request()->limit ?? 10;
        $page = request()->page ?? 1;
        return $this->languageChapterRepository->fetchLanguageChapters($limit, $page);
    }

    public function fetchLanguageChapter(int $id)
    {
        return $this->languageChapterRepository->fetchLanguageChapter($id);
    }

    public function store(array $data)
    {
        return $this->languageChapterRepository->store($data);
    }

    public function update(array $data , LanguageChapter $languageChapter)
    {
        return $this->languageChapterRepository->update($data , $languageChapter);
    }

    public function delete(LanguageChapter $languageChapter)
    {
        return $this->languageChapterRepository->delete($languageChapter);
    }

}
