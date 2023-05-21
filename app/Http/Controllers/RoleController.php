<?php

namespace App\Http\Controllers;

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
    $roles = $this->roleRepository->getRoleNames();

    return response()->json($roles);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $roleCreated = $this->roleRepository->create($request);

    return response()->json($roleCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Role $role)
  {
    return response()->json($this->roleRepository->find($role));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Role $role)
  {
    $roleUpdated = $this->roleRepository->updateRoleName($request, $role);

    return response()->json($roleUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Role $role)
  {
    $this->roleRepository->delete($role);

    return response()->json([
      'status' => 'success',
      'data'   => $role
    ]);
  }
}
