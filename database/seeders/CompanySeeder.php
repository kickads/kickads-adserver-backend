<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('companies')->insert([
      [
        'name'       => 'Kickads',
        'entity_id'  => fake()->numberBetween(1, 5),
        'country_id' => fake()->numberBetween(1, 20),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'name'       => 'Sidekick',
        'entity_id'  => fake()->numberBetween(1, 5),
        'country_id' => fake()->numberBetween(1, 20),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'name'       => 'Ravasa company',
        'entity_id'  => fake()->numberBetween(1, 5),
        'country_id' => fake()->numberBetween(1, 20),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'name'       => 'Nekoplay',
        'entity_id'  => fake()->numberBetween(1, 5),
        'country_id' => fake()->numberBetween(1, 20),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'name'       => 'Kickads méxico',
        'entity_id'  => fake()->numberBetween(1, 5),
        'country_id' => fake()->numberBetween(1, 20),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
    ]);
  }
}
