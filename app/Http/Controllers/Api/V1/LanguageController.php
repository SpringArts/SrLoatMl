<?php

namespace App\Http\Controllers\Api\V1;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use App\Usecases\Language\LanguageAction;
use Illuminate\Http\Request;

class LanguageController extends Controller
{

    protected $languageAction;

    public function __construct(LanguageAction $LanguageAction)
    {
        $this->languageAction = $LanguageAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->languageAction->fetchAllLanguages();
        return ResponseHelper::success("Here are languages", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LanguageRequest $request)
    {
        return ResponseHelper::success("Language is add successfully", $this->languageAction->store($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ResponseHelper::success(null, $this->languageAction->show($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        return ResponseHelper::success("Updated Successfully", $this->languageAction->update($request->all(), $language));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        return ResponseHelper::success("Successfully deleted", $this->languageAction->delete($language));
    }
}
