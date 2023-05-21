<?php

namespace Database\Seeders;

use App\Models\DealBranding;
use Illuminate\Database\Seeder;

class DealBrandingSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DealBranding::factory()->count(50)->create();
  }
}
