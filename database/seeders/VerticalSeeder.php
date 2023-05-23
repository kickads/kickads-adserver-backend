<?php

namespace Database\Seeders;

use App\Models\Vertical;
use Illuminate\Database\Seeder;

class VerticalSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Vertical::factory()->count(5)->create();
  }
}
