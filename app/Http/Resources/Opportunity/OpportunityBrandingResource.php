<?php

namespace App\Http\Resources\Opportunity;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\OpportunityBranding */
class OpportunityBrandingResource extends JsonResource
{
  public function toArray(Request $request): array
  {
    return [
      'id'                      => $this->id,
      'deals_branding_id'       => $this->deals_branding_id,
      'country_id'              => $this->country_id,
      'purchase_models_id'      => $this->purchase_models_id,
      'product'                 => $this->product,
      'start_date'              => $this->start_date,
      'end_date'                => $this->end_date,
      'targeting'               => $this->targeting,
      'comment'                 => $this->comment,
      'device_id'               => $this->device_id,
      'format_id'               => $this->format_id,
      'action_id'               => $this->action_id,
      'gross_agency_commission' => $this->gross_agency_commission,
      'format_options'          => $this->format_options,
      'gross_rate'              => $this->gross_rate,
      'net_rate'                => $this->net_rate,
      'available_rate'          => $this->available_rate,
      'budget'                  => $this->budget,
      'net_budget'              => $this->net_budget,
      'available_budget'        => $this->available_budget,
      'goal_units'              => $this->goal_units,
      'is_multi_carrier'        => $this->is_multi_carrier,
      'created_at'              => $this->created_at,
      'updated_at'              => $this->updated_at,
    ];
  }
}
