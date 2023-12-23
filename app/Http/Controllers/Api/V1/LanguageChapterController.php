<?php

namespace App\Http\Controllers\Api\V1;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageChapterRequest;
use App\Http\Resources\LanguageChapterResource;
use App\Models\LanguageChapter;
use App\Usecases\Language\LanguageChapterAction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LanguageChapterController extends Controller
{
    protected $languageChapterAction;

    public function __construct(LanguageChapterAction $languageChapterAction)
    {
        $this->languageChapterAction = $languageChapterAction;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->languageChapterAction->fetchLanguageChapters();
        return ResponseHelper::success('Fetched Successfully', LanguageChapterResource::collection($data), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LanguageChapterRequest $request)
    {
        $this->languageChapterAction->store($request->all());
        return ResponseHelper::success('Created Successfully', null, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(LanguageChapter $languageChapter)
    {
        return ResponseHelper::success('Fetched Successfully', new LanguageChapterResource($languageChapter) , Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LanguageChapter $languageChapter)
    {
        $this->languageChapterAction->update($request->all(), $languageChapter);
        return ResponseHelper::success('Updated Successfully', null, Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LanguageChapter $languageChapter)
    {
        return $this->languageChapterAction->delete($languageChapter);
    }
}
