<?php

namespace App\Http\Controllers\Api\V1;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamResultRequest;
use App\Usecases\Exam\ExamResultAction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExamController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExamResultRequest $request)
    {
        $this->examResultAction->store($request->all());
        return ResponseHelper::success("Stored Successfully", null, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
