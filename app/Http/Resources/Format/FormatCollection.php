<?php

namespace App\Http\Resources\Format;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Format */
class FormatCollection extends ResourceCollection
{
  public function toArray(Request $request): array
  {
    return [
      'formats' => $this->collection,
    ];
  }
}
