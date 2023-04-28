<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $roles = Role::all()->pluck('name');

    return response()->json($roles);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $role = Role::create([
      'name'       => $request->name,
      'guard_name' => $request->guard_name,
    ]);

    return response()->json($role);
  }

  /**
   * Display the specified resource.
   */
  public function show(Role $role)
  {
    return response()->json($role);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Role $role)
  {
    $oldRole = Role::find($role->id);
    $oldRole->name = $request->name;
    $oldRole->guard_name = $request->guard_name;
    $oldRole->save();

    return response()->json($oldRole);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Role $role)
  {
    $role->delete();

    return response()->json([
      'status' => 'success',
      'data'   => $role
    ]);
  }
}
