<?php

namespace App\Repositories;

use App\Models\DealPmp;

class DealPmpRepository extends CrudRepository
{
  public function __construct(DealPmp $dealPmp)
  {
    parent::__construct($dealPmp);
  }
}