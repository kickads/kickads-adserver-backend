<?php

namespace App\Http\Controllers;

use App\Http\Requests\Role\RoleStoreRequest;
use App\Http\Requests\Role\RoleUpdateRequest;
use App\Http\Resources\Role\RoleCollection;
use App\Http\Resources\Role\RoleResource;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
  private RoleRepository $roleRepository;

  public function __construct(RoleRepository $roleRepository)
  {
    $this->roleRepository = $roleRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $roles = $this->roleRepository->all();

    return jsend_success(new RoleCollection($roles));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(RoleStoreRequest $request)
  {
    $roleCreated = $this->roleRepository->create($request);

    return jsend_success($roleCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Role $role)
  {
    $role = $this->roleRepository->find($role);
    return jsend_success(new RoleResource($role));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(RoleUpdateRequest $request, Role $role)
  {
    $roleUpdated = $this->roleRepository->updateRoleName($request, $role);

    return jsend_success($roleUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Role $role)
  {
    $this->roleRepository->delete($role);

    return jsend_success($role);
  }
}
