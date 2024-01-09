<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Response;
use App\Helpers\ResponseHelper;
use App\UseCases\User\UserAction;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    protected $userAction;

    public function __construct(UserAction $userAction)
    {
        $this->userAction = $userAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->userAction->fetchPaginatedUsers();
        return response()->json([
            'data' => UserResource::collection($data),
            'meta' => ResponseHelper::getPaginationMeta($data)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $this->userAction->store($request->all());
        return ResponseHelper::success('Created Successfully', null, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $data = $this->userAction->fetchUser($user);
        return ResponseHelper::success('Successfully fetch', new UserResource($data), Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $this->userAction->update($request->all(), $user);
        return ResponseHelper::success("Successfully updated", null, Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->userAction->delete($user);
        return ResponseHelper::success("Successfully deleted", null, Response::HTTP_OK);
    }
}
