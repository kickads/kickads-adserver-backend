<?php

namespace App\Http\Resources\Action;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Action */
class ActionCollection extends ResourceCollection
{
  public function toArray(Request $request): array
  {
    return [
      'actions' => $this->collection,
    ];
  }
}
