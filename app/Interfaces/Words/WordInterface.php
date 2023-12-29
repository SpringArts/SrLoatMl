<?php

namespace App\Interfaces\Words;

use App\Models\JapaneseWord;

interface WordInterface {
    public function fetchAllWords(int $limit , int $page);
    public function fetchSingleWord(int $id);
    public function store(array $data);
    public function update(array $data , JapaneseWord $japaneseWord);
    public function delete(JapaneseWord $japaneseWord);
}

