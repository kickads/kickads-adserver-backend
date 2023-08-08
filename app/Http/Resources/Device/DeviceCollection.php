<?php

namespace App\Http\Resources\Device;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Device */
class DeviceCollection extends ResourceCollection
{
  public function toArray(Request $request): array
  {
    return [
      'devices' => $this->collection,
    ];
  }
}
