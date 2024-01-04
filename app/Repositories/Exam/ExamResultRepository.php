<?php


namespace App\Repositories\Exam;


use App\Interfaces\Exam\ExamResultInterface;
use App\Models\ExamResult;

class ExamResultRepository implements ExamResultInterface
{

    public function store(array $data)
    {
        return ExamResult::create($data);
    }

    public function fetchAllExamResults(int $limit, int $page)
    {
        return ExamResult::paginate($limit, ['*'], 'page', $page)->withQueryString();
    }

    public function fetchSingleExamResult(int $id)
    {
        return ExamResult::find($id);
    }

    public function update(array $data, ExamResult $examResult)
    {
        return $examResult->update($data);
    }

    public function delete(ExamResult $examResult)
    {
        return $examResult->delete();
    }
}
