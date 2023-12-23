<?php

namespace App\Interfaces\Language;

use App\Models\Language;
use Illuminate\Database\Eloquent\Collection;

interface LanguageInterface{
    public function fetchLanguages(int $limit, int $page);
    public function fetchLanguage(int $id);
    public function store(array $data);
    public function update(array $data, Language $language);
    public function delete(Language $language);
}
