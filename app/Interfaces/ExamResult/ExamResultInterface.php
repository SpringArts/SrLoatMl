<?php

namespace App\Interfaces\ExamResult;

use App\Models\ExamResult;

interface ExamResultInterface
{
    public function fetchExamResults(int $limit, int $page);
    public function fetchExamResult(int $id);
    public function store(array $data);
    public function update(array $data, ExamResult $examResult);
    public function delete(ExamResult $examResult);
}
