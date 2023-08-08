<?php

namespace App\Repositories;

use App\Models\Format;

class FormatRepository extends CrudRepository
{
  public function __construct(Format $format)
  {
    parent::__construct($format);
  }
}