<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Admin;
use Illuminate\Http\Response;
use App\Helpers\ResponseHelper;
use App\Http\Requests\AdminRequest;
use App\UseCases\User\AdminAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\AdminResource;

class AdminController extends Controller
{
    protected $adminAction;

    public function __construct(AdminAction $adminAction)
    {
        $this->adminAction = $adminAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->adminAction->fetchPaginatedAdmins();
        return response()->json([
            'data' => AdminResource::collection($data),
            'meta' => ResponseHelper::getPaginationMeta($data)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        $this->adminAction->store($request->all());
        return ResponseHelper::success('Created Successfully', null, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        $data = $this->adminAction->fetchAdmin($admin);
        return ResponseHelper::success('Successfully fetch', new AdminResource($data), Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminRequest $request, Admin $admin)
    {
        $this->adminAction->update($request->all(), $admin);
        return ResponseHelper::success("Successfully updated", null, Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $this->adminAction->delete($admin);
        return ResponseHelper::success("Successfully deleted", null, Response::HTTP_OK);
    }
}
