<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model
{
  use HasFactory;

  protected $fillable = ['name', 'entity_id', 'country_id'];

  public function entity(): HasOne
  {
    return $this->hasOne(Entity::class, 'id', 'entity_id');
  }

  public function country(): HasOne
  {
    return $this->hasOne(Country::class, 'id', 'country_id');
  }
}
