<?php

namespace App\Http\Resources\PurchaseModel;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\PurchaseModel */
class PurchaseModelCollection extends ResourceCollection
{
  public function toArray(Request $request): array
  {
    return [
      'purchase_models' => $this->collection,
    ];
  }
}
