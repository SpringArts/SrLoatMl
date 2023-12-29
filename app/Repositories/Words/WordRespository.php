<?php

namespace App\Repositories\Words;

use App\Interfaces\Words\WordInterface;
use App\Models\JapaneseWord;

class WordRespository implements WordInterface
{

    public function fetchAllWords(int $limit, int $page)
    {
        return JapaneseWord::paginate($limit, ['*'], 'page', $page)->withQueryString();
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
