<?php

namespace App\Repositories;

use App\Models\DealPerformance;

class DealPerformanceRepository extends CrudRepository
{
  public function __construct(DealPerformance $dealPerformance)
  {
    parent::__construct($dealPerformance);
  }
}