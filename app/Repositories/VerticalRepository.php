<?php

namespace App\Repositories;

use App\Models\Vertical;

class VerticalRepository extends CrudRepository
{
  public function __construct(Vertical $vertical)
  {
    parent::__construct($vertical);
  }
}