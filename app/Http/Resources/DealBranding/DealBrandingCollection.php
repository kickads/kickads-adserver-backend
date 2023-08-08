<?php

namespace App\Http\Resources\DealBranding;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\DealBranding */
class DealBrandingCollection extends ResourceCollection
{
  public function toArray(Request $request): array
  {
    return [
      'deals_branding' => $this->collection,
    ];
  }
}
