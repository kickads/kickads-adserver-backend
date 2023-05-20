<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends CrudRepository
{
  public function __construct(User $user)
  {
    parent::__construct($user);
  }

  /**
   * Update the specified resource in storage.
   */
  public function updateRole($request, $model)
  {
    $oldUser = $this->model::find($model->id);
    $oldUser->removeRole($oldUser->roles[0]->name);
    $oldUser->assignRole($request->role);

    return $oldUser;
  }
}