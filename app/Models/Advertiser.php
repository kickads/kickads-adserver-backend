<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
  use HasFactory;

  protected $fillable = [
    'company_id',
    'entity_id',
    'country_id',
    'currency_id',
    'name',
    'prefix',
    'address',
    'state',
    'zip_code',
    'commercial_contact',
    'commercial_email',
    'net_payment',
    'agency',
  ];
}
