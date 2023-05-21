<?php

namespace Database\Seeders;

use App\Models\DealPmp;
use Illuminate\Database\Seeder;

class DealPmpSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DealPmp::factory()->count(50)->create();
  }
}
