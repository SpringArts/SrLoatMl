<?php

namespace App\UseCases\Words;

use App\Interfaces\Words\WordInterface;
use App\Models\JapaneseWord;
use App\Services\Words\WordService;

class WordAction {

    private $wordRespository;

    public function __construct(WordInterface $wordRespository)
    {
        $this->wordRespository = $wordRespository;
    }

    public function fetchAllWords()
    {
        $limit = request()->limit ?? 10;
        $page = request()->page ?? 1;
        return WordService::fetchAllWords($limit , $page);
//        return $this->wordRespository->fetchAllWords($limit, $page);
    }

    public function fetchSingleWord(JapaneseWord $japaneseWord)
    {
        return $japaneseWord;
    }

    public function store(array $data)
    {
        return JapaneseWord::create($data);
    }

    public function update(array $data, JapaneseWord $japaneseWord)
    {
        return $this->wordRespository->update($data, $japaneseWord);
    }

    public function delete(JapaneseWord $japaneseWord)
    {
        return $this->wordRespository->delete($japaneseWord);
    }

}
