<?php

namespace App\Repositories;

use App\Models\DealBranding;

class DealBrandingRepository extends CrudRepository
{
  public function __construct(DealBranding $dealBranding)
  {
    parent::__construct($dealBranding);
  }
}