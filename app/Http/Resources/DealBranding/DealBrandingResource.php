<?php

namespace App\Http\Resources\DealBranding;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\DealBranding */
class DealBrandingResource extends JsonResource
{
  public function toArray(Request $request): array
  {
    return [
      'id'                     => $this->id,
      'business_model_id'      => $this->business_model_id,
      'advertiser_id'          => $this->advertiser_id,
      'entity_id'              => $this->entity_id,
      'company_id'             => $this->company_id,
      'ios_id'                 => $this->ios_id,
      'campaign_category_id'   => $this->campaign_category_id,
      'priority_id'            => $this->priority_id,
      'goal_description'       => $this->goal_description,
      'start_date'             => $this->start_date,
      'end_date'               => $this->end_date,
      'open_budget'            => $this->open_budget,
      'agency_commission'      => $this->agency_commission,
      'budget_total'           => $this->budget_total,
      'goals_units'            => $this->goals_units,
      'exchange_rate'          => $this->exchange_rate,
      'name'                   => $this->campaign_name,
      'campaigns_restrictions' => $this->campaigns_restrictions,
      'comment'                => $this->comment,
      'net_budget'             => $this->net_budget,
      'available_budget'       => $this->available_budget,
      'saving_profit_percent'  => $this->saving_profit_percent,
      'client_report'          => $this->client_report,
      'external_operation'     => $this->external_operation,
      'created_at'             => $this->created_at,
      'updated_at'             => $this->updated_at,
    ];
  }
}
