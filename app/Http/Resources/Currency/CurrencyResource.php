<?php

namespace App\Http\Resources\Currency;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CurrencyResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'id'         => $this->id,
      'price'      => $this->price,
      'name'       => $this->name,
      'country'    => $this->country->name ?? 'Sin asignar',
      'country_id' => $this->country_id ?? 'Sin asignar',
    ];
  }
}
