<?php

namespace App\UseCases\Exam;

use App\Models\ExamRecord;
use App\Interfaces\ExamRecord\ExamRecordInterface;

class ExamRecordAction
{
    private $examRecordRepository;

    public function __construct(ExamRecordInterface $examRecordRepository)
    {
        $this->examRecordRepository = $examRecordRepository;
    }

    public function fetchAllExamRecords()
    {
        $limit = request()->limit ?? 10;
        $page = request()->page ?? 1;
        $data = $this->examRecordRepository->fetchExamRecords($limit, $page);
        return $data;
    }

    public function store(array $data)
    {
        return $this->examRecordRepository->store($data);
    }

    public function show(int $id)
    {
        return $this->examRecordRepository->fetchExamRecord($id);
    }

    public function update(array $data, ExamRecord $examRecord)
    {
        return $this->examRecordRepository->update($data, $examRecord);
    }

    public function delete(ExamRecord $examRecord)
    {
        return $this->examRecordRepository->delete($examRecord);
    }
}
