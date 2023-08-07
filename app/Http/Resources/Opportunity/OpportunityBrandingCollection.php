<?php

namespace App\Http\Resources\Opportunity;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\OpportunityBranding */
class OpportunityBrandingCollection extends ResourceCollection
{
  public function toArray(Request $request): array
  {
    return [
      'opportunities' => $this->collection,
    ];
  }
}
