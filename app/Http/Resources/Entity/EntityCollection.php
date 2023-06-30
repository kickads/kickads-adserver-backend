<?php

namespace App\Http\Resources\Entity;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EntityCollection extends ResourceCollection
{
  /**
   * Transform the resource collection into an array.
   *
   * @return array<int|string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'entities' => $this->collection
    ];
  }
}