<?php

namespace App\Repositories;

use App\Models\BusinessModel;

class BusinessModelRepository extends CrudRepository
{
  public function __construct(BusinessModel $businessModel)
  {
    parent::__construct($businessModel);
  }
}