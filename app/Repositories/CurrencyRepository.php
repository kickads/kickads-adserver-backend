<?php

namespace App\Repositories;

use App\Models\Currency;

class CurrencyRepository extends CrudRepository
{
  public function __construct(Currency $currency)
  {
    parent::__construct($currency);
  }

  public function getAcronymNames(): \Illuminate\Support\Collection
  {
    return Currency::all()->pluck('acronym');
  }
}