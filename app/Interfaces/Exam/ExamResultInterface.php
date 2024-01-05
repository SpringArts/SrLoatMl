<?php

namespace App\Interfaces\Exam;

use App\Models\ExamResult;

interface ExamResultInterface {
    public function fetchAllExamResults(int $limit , int $page);
    public function fetchSingleExamResult(int $id);
    public function store(array $data);
    public function update(array $data, ExamResult $examResult);
    public function delete(ExamResult $examResult);
}
