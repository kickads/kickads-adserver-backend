<?php

namespace Database\Seeders;

use App\Models\Ios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IosSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Ios::factory()->count(5)->create();
  }
}
