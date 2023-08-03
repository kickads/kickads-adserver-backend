<?php

namespace Database\Seeders;

use App\Models\Format;
use Illuminate\Database\Seeder;

class FormatSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Format::factory()->count(5)->create();
  }
}
