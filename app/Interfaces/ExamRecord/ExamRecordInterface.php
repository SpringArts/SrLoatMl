<?php

namespace App\Interfaces\ExamRecord;

use App\Models\ExamRecord;

interface ExamRecordInterface
{
    public function fetchExamRecords(int $limit, int $page);
    public function fetchExamRecord(int $id);
    public function store(array $data);
    public function update(array $data, ExamRecord $examRecord);
    public function delete(ExamRecord $examRecord);
}
