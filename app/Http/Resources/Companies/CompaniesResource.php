<?php

namespace App\Http\Resources\Companies;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompaniesResource extends JsonResource
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
      'name'       => $this->name,
      'entity'     => $this->entity->name,
      'entity_id'  => $this->entity_id,
      'country'    => $this->country->name ?? 'Sin asignar',
      'country_id' => $this->country_id?? 'Sin asignar',
    ];
  }
}
