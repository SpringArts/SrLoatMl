<?php

namespace App\Http\Controllers\Api\V1;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Http\Resources\LanguageResource;
use App\Models\Language;
use App\Usecases\Language\LanguageAction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LanguageController extends Controller
{

    protected $languageAction;

    public function __construct(LanguageAction $languageAction)
    {
        $this->languageAction = $languageAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->languageAction->fetchAllLanguages();
        return ResponseHelper::success("Successfully Fetched", LanguageResource::collection($data), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LanguageRequest $request)
    {
        $this->languageAction->store($request->all());
        return ResponseHelper::success("Successfully Added", null, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        return ResponseHelper::success('success', new LanguageResource($language));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        $this->languageAction->update($request->all(), $language);
        return ResponseHelper::success("Updated Successfully", null, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        return $this->languageAction->delete($language);
    }
}
