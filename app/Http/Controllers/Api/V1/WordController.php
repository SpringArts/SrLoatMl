<?php

namespace App\Http\Controllers\Api\v1;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\WordRequest;
use App\Http\Resources\WordResource;
use App\Models\JapaneseWord;
use App\UseCases\Words\WordAction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class WordController extends Controller
{

    protected $wordAction;

    public function __construct(WordAction $wordAction)
    {
        $this->wordAction = $wordAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->wordAction->fetchAllWords();
        return ResponseHelper::success('Successfully fetched', WordResource::collection($data), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WordRequest $request)
    {
        $this->wordAction->store($request->all());
        return ResponseHelper::success('Created Successfully', null, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(JapaneseWord $japaneseWord)
    {
        $data = $this->wordAction->fetchSingleWord($japaneseWord);
        return ResponseHelper::success('Successfully fetch', new WordResource($data), Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WordRequest $request, JapaneseWord $japaneseWord)
    {
        $this->wordAction->update($request->all(), $japaneseWord);
        return ResponseHelper::success("Successfully updated", null , Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JapaneseWord $japaneseWord)
    {
        $this->wordAction->delete($japaneseWord);
        return ResponseHelper::success("Successfully deleted", null, Response::HTTP_OK);
    }
}
