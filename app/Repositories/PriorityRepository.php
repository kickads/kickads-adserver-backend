<?php

namespace App\Repositories;

use App\Models\Priority;

class PriorityRepository extends CrudRepository
{
  public function __construct(Priority $priority)
  {
    parent::__construct($priority);
  }
}