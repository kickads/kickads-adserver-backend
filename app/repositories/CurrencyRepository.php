<?php

namespace App\repositories;

use Illuminate\Database\Eloquent\Model;

class CurrencyRepository extends CrudRepository
{
  public function __construct(Model $model)
  {
    parent::__construct($model);
  }
}