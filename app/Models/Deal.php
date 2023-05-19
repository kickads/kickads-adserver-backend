<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
  use HasFactory;

  protected $fillable = [
    'business_model_id',
    'advertiser_id',
    'entity_id',
    'company_id',
    'goal_description',
    'start_date',
    'end_date',
    'open_budget',
    'agency_commission',
    'budget_total',
    'goals_units',
    'exchange_rate',
    'campaign_name',
    'campaigns_restrictions',
    'comment',
  ];
}
