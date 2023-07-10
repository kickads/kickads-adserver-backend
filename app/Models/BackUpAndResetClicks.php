<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackUpAndResetClicks extends Model
{
  use HasFactory;

  protected $table = 'clicks_log_per_day';

  protected $fillable = ['intersticial_id', 'name', 'total', 'date'];
}
