<?php

namespace App\repositories;

use Spatie\Permission\Models\Role;

class RoleRepository extends CrudRepository
{
  public function __construct(Role $role)
  {
    parent::__construct($role);
  }

  public function getRoleNames()
  {
    return Role::all()->pluck('name');
  }

  public function updateRoleName($request, $role)
  {
    $oldRole = Role::find($role->id);
    $oldRole->name = $request->name;
    $oldRole->guard_name = $request->guard_name;
    $oldRole->save();

    return $oldRole;
  }
}