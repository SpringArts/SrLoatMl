<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Response;
use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamRecordRequest;
use App\Http\Resources\ExamRecordResource;
use App\Models\ExamRecord;
use App\UseCases\Exam\ExamRecordAction;

class ExamRecordController extends Controller
{

    protected $examRecordAction;

    public function __construct(ExamRecordAction $examRecordAction)
    {
        $this->examRecordAction = $examRecordAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->examRecordAction->fetchAllExamRecords();
        return ResponseHelper::success("Successfully Fetched", ExamRecordResource::collection($data), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExamRecordRequest $request)
    {
        $this->examRecordAction->store($request->all());
        return ResponseHelper::success("Successfully Added", null, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(ExamRecord $examRecord)
    {
        return ResponseHelper::success('success', new ExamRecordResource($examRecord));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExamRecordRequest $request, ExamRecord $examRecord)
    {
        $this->examRecordAction->update($request->all(), $examRecord);
        return ResponseHelper::success("Updated Successfully", null, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExamRecord $examRecord)
    {
        return $this->examRecordAction->delete($examRecord);
    }
}
