<?php

namespace App\Http\Resources\Intersticial;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IntersticialResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'id'             => $this->id,
      'creative'       => $this->creative->name,
      'client'         => $this->client->name,
      'country'        => $this->country->name,
      'business_model' => $this->businessModel->name,
      'name'           => $this->name,
      'clicks'         => $this->clicks->sum('total'),
      'interactions'   => $this->interactions->sum('total'),
      'start_day'      => $this->start_day,
      'end_day'        => $this->end_day,
    ];
  }
}
