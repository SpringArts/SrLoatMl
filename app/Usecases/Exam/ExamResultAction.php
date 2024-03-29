<?php

namespace App\Usecases\Exam;

use App\Interfaces\ExamResult\ExamResultInterface;
use App\Jobs\ExamCheckJob;
use App\Models\ExamResult;
use Illuminate\Support\Facades\Auth;

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
        return $this->examResultRepository->fetchExamResults($limit, $page);
    }

    public function fetchSingleExamResult(ExamResult $examResult)
    {
        return $examResult;
    }

    public function store(array $data)
    {
        $limit = request()->limit ?? 10;
        $page = request()->page ?? 1;
        $userId= Auth::id();
        foreach ($data as $exam){
            ExamCheckJob::dispatch($exam , $userId);
        }
        return $this->examResultRepository->fetchExamResults($limit, $page);
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
