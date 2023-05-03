<?php

namespace App\repositories;

use App\Models\BusinessModel;
use Illuminate\Database\Eloquent\Model;

class BusinessModelRepository extends CrudRepository
{
  public function __construct(BusinessModel $businessModel)
  {
    parent::__construct($businessModel);
  }
}