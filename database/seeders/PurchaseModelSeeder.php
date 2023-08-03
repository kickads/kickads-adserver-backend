<?php

namespace Database\Seeders;

use App\Models\PurchaseModel;
use Illuminate\Database\Seeder;

class PurchaseModelSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    PurchaseModel::factory()->count(5)->create();
  }
}
