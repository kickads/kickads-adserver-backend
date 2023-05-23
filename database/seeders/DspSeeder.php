<?php

namespace Database\Seeders;

use App\Models\Dsp;
use Illuminate\Database\Seeder;

class DspSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Dsp::factory()->count(5)->create();
  }
}
