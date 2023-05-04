<?php

namespace App\repositories;

use App\Models\Currency;

class CurrencyRepository extends CrudRepository
{
  public function __construct(Currency $currency)
  {
    parent::__construct($currency);
  }
}