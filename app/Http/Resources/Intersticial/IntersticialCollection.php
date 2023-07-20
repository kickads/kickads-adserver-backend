<?php

namespace App\Http\Resources\Intersticial;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class IntersticialCollection extends ResourceCollection
{
  /**
   * Transform the resource collection into an array.
   *
   * @return array<int|string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'intersticials' => $this->collection,
    ];
  }
}
