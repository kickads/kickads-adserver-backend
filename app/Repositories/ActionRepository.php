<?php

namespace App\Repositories;

use App\Models\Action;

class ActionRepository extends CrudRepository
{
  public function __construct(Action $action)
  {
    parent::__construct($action);
  }
}