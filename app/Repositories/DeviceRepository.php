<?php

namespace App\Repositories;

use App\Models\Device;

class DeviceRepository extends CrudRepository
{
  public function __construct(Device $device)
  {
    parent::__construct($device);
  }
}