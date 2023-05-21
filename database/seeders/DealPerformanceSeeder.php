<?php

namespace Database\Seeders;

use App\Models\DealPerformance;
use Illuminate\Database\Seeder;

class DealPerformanceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DealPerformance::factory()->count(50)->create();
  }
}
