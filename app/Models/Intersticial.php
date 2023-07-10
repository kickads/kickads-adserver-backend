<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intersticial extends Model
{
  use HasFactory;

  protected $fillable = ['creative_id', 'client_id', 'country_id', 'business_model_id', 'name', 'start_day', 'end_day'];
}
