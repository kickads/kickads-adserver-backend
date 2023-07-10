<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackUpAndResetInteractions extends Model
{
  use HasFactory;

  protected $table = 'interactions_log_per_day';

  protected $fillable = ['intersticial_id', 'name', 'total', 'date'];
}
