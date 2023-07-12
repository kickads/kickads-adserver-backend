<?php

namespace App\Http\Resources\Creative;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CreativeCollection extends ResourceCollection
{
  /**
   * Transform the resource collection into an array.
   *
   * @return array<int|string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'creatives' => $this->collection,
    ];
  }
}
