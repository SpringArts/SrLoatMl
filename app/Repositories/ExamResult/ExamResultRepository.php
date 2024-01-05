<?php


namespace App\Repositories\ExamResult;

use App\Interfaces\ExamResult\ExamResultInterface;
use App\Models\ExamResult;

class ExamResultRepository implements ExamResultInterface
{

    public function fetchExamResults(int $limit, int $page)
    {
        return ExamResult::paginate($limit, ["*"], "page", $page)->withQueryString();
    }

    public function fetchExamResult(int $id)
    {
        return ExamResult::find($id);
    }

    public function store(array $data)
    {
        return ExamResult::create($data);
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
