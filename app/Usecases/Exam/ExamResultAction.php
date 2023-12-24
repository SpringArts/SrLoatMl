<?php

namespace App\UseCases\Exam;

use App\Models\ExamResult;
use App\Interfaces\ExamResult\ExamResultInterface;

class ExamResultAction
{
    private $examResultRepository;

    public function __construct(ExamResultInterface $examResultRepository)
    {
        $this->examResultRepository = $examResultRepository;
    }

    public function fetchAllExamResults()
    {
        $limit = request()->limit ?? 10;
        $page = request()->page ?? 1;
        $data = $this->examResultRepository->fetchExamResults($limit, $page);
        return $data;
    }

    public function store(array $data)
    {
        return $this->examResultRepository->store($data);
    }

    public function show(int $id)
    {
        return $this->examResultRepository->fetchExamResult($id);
    }

    public function update(array $data, ExamResult $examResult)
    {
        return $this->examResultRepository->update($data, $examResult);
    }

    public function delete(ExamResult $examResult)
    {
        return $this->examResultRepository->delete($examResult);
    }
}
