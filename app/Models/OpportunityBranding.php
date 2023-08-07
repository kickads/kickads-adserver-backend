<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpportunityBranding extends Model
{
  use HasFactory;

  protected $table    = 'opportunities_branding';
  protected $fillable = [
    'deals_branding_id',
    'country_id',
    'purchase_models_id',
    'device_id',
    'format_id',
    'action_id',
    'product',
    'targeting',
    'comment',
    'gross_agency_commission',
    'format_options',
    'gross_rate',
    'net_rate',
    'available_rate',
    'budget',
    'budget_delivered',
    'net_budget',
    'available_budget',
    'goal_units',
    'start_date',
    'end_date',
    'is_multi_carrier'
  ];
}
