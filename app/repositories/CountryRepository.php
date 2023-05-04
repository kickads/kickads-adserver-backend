<?php

namespace App\repositories;

use App\Models\Country;

class CountryRepository extends CrudRepository
{
  public function __construct(Country $country)
  {
    parent::__construct($country);
  }
}