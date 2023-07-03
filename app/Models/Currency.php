<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Currency extends Model
{
  use HasFactory;

  protected $fillable = [ 'country_id', 'price', 'name' ];

  public function country(): HasOne
  {
    return $this->hasOne(Country::class, 'id', 'country_id');
  }
}
