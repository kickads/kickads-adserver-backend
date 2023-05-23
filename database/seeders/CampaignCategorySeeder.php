<?php

namespace Database\Seeders;

use App\Models\CampaignCategory;
use Illuminate\Database\Seeder;

class CampaignCategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    CampaignCategory::factory()->count(5)->create();
  }
}
