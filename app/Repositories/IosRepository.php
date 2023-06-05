<?php

namespace App\Repositories;

use App\Models\Ios;
use Illuminate\Database\Eloquent\Model;

class IosRepository extends CrudRepository
{
  public function __construct(Ios $ios)
  {
    parent::__construct($ios);
  }
}