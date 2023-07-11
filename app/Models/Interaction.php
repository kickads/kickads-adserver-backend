<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Interaction extends Model
{
  use HasFactory;

  protected $fillable = ['intersticial_id', 'name'];

  public function intersticial(): HasOne
  {
    return $this->hasOne(Intersticial::class, 'id', 'intersticial_id');
  }
}
