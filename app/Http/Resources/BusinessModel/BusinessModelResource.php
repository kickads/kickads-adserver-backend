<?php

namespace App\Http\Resources\BusinessModel;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusinessModelResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'id'   => $this->id,
      'name' => $this->name,
    ];
  }
}
