<?php

namespace App\Repositories\Words;

use App\Interfaces\Words\WordInterface;
use App\Models\JapaneseWord;

class WordRespository implements WordInterface
{

    public function fetchAllWords(int $limit, int $page)
    {
        return JapaneseWord::when(request("languageChapterId"), function ($q){
            $chapterId = request("languageChapterId");
            $q->where('language_chapter_id', $chapterId);
        })->when(request("languageLevelId"), function ($q){
            $levelId = request("languageLevelId");
            $q->where('language_level_id',$levelId);
    })->paginate($limit, ['*'], 'page', $page)->withQueryString();
    }

    public function fetchSingleWord(int $id)
    {
        return JapaneseWord::find($id);
    }

    public function store(array $data)
    {
        return JapaneseWord::create($data);
    }

    public function update(array $data, JapaneseWord $japaneseWord)
    {
        return $japaneseWord->update($data);
    }

    public function delete(JapaneseWord $japaneseWord)
    {
        return $japaneseWord->delete();
    }
}
