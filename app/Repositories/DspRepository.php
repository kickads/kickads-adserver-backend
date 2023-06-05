<?php

namespace App\Repositories;

use App\Models\Dsp;

class DspRepository extends CrudRepository
{
  public function __construct(Dsp $dsp)
  {
    parent::__construct($dsp);
  }
}