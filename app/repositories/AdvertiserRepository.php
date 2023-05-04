<?php

namespace App\repositories;

use App\Models\Advertiser;
use Illuminate\Database\Eloquent\Model;

class AdvertiserRepository extends CrudRepository
{
  public function __construct(Advertiser $advertiser)
  {
    parent::__construct($advertiser);
  }
}