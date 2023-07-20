<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Intersticial extends Model
{
  use HasFactory;

  protected $fillable = ['creative_id', 'client_id', 'country_id', 'business_model_id', 'name', 'start_day', 'end_day'];

  public function country(): HasOne
  {
    return $this->hasOne(Country::class, 'id', 'country_id');
  }

  public function client(): HasOne
  {
    return $this->hasOne(Client::class, 'id', 'client_id');
  }

  public function creative(): HasOne
  {
    return $this->hasOne(Creative::class, 'id', 'creative_id');
  }

  public function businessModel(): HasOne
  {
    return $this->hasOne(BusinessModel::class, 'id', 'business_model_id');
  }

  public function clicks(): HasMany
  {
    return $this->hasMany(Click::class, 'intersticial_id', 'id');
  }

  public function interactions(): HasMany
  {
    return $this->hasMany(Interaction::class, 'intersticial_id', 'id');
  }
}
