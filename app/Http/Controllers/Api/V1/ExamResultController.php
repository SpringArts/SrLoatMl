<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Response;
use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamResultRequest;
use App\Http\Resources\ExamResultResource;
use App\Models\ExamResult;
use App\UseCases\Exam\ExamResultAction;

class ExamResultController extends Controller
{

    protected $examResultAction;

    public function __construct(ExamResultAction $examResultAction)
    {
        $this->examResultAction = $examResultAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->examResultAction->fetchAllExamResults();
        return ResponseHelper::success("Successfully Fetched", ExamResultResource::collection($data), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExamResultRequest $request)
    {
        $this->examResultAction->store($request->all());
        return ResponseHelper::success("Successfully Added", null, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(ExamResult $examResult)
    {
        return ResponseHelper::success('success', new ExamResultResource($examResult));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExamResultRequest $request, ExamResult $examResult)
    {
        $this->examResultAction->update($request->all(), $examResult);
        return ResponseHelper::success("Updated Successfully", null, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExamResult $examResult)
    {
        return $this->examResultAction->delete($examResult);
    }
}
