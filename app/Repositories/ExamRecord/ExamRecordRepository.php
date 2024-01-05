<?php


namespace App\Repositories\ExamRecord;

use App\Interfaces\ExamRecord\ExamRecordInterface;
use App\Models\ExamRecord;

class ExamRecordRepository implements ExamRecordInterface
{

    public function fetchExamRecords(int $limit, int $page)
    {
        return ExamRecord::paginate($limit, ["*"], "page", $page)->withQueryString();
    }

    public function fetchExamRecord(int $id)
    {
        return ExamRecord::find($id);
    }

    public function store(array $data)
    {
        return ExamRecord::create($data);
    }

    public function update(array $data, ExamRecord $examRecord)
    {
        return $examRecord->update($data);
    }

    public function delete(ExamRecord $examRecord)
    {
        return $examRecord->delete();
    }
}
