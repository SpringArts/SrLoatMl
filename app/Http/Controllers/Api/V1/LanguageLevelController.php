<?php

namespace App\Http\Controllers\Api\V1;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageLevelRequest;
use App\Http\Resources\LanguageLevelResource;
use App\Models\LanguageLevel;
use App\UseCases\Language\LanguageLevelAction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LanguageLevelController extends Controller
{
    protected $languageLevelAction;

    public function __construct(LanguageLevelAction $languageLevelAction)
    {
        $this->languageLevelAction = $languageLevelAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->languageLevelAction->fetchAllLanguageLevels();
        return ResponseHelper::success("Successfully Fetched", LanguageLevelResource::collection($data), Response::HTTP_OK );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LanguageLevelRequest $request)
    {
        $this->languageLevelAction->store($request->all());
        return ResponseHelper::success("Successfully created", null, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(LanguageLevel $languageLevel)
    {
        return ResponseHelper::success("Successfully fetched", new LanguageLevelResource($languageLevel));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LanguageLevelRequest $request, LanguageLevel $languageLevel)
    {
        $this->languageLevelAction->update($languageLevel, $request->all());
        return ResponseHelper::success("Successfully updated", null, Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LanguageLevel $languageLevel)
    {
        return $this->languageLevelAction->delete($languageLevel);
    }
}
