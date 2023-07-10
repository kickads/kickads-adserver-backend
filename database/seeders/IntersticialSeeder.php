<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntersticialSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('intersticials')->insert([
      [
        'creative_id'       => 1,
        'client_id'         => 1,
        'country_id'        => 1,
        'business_model_id' => 1,
        'name'              => 'test 1',
        'start_day'         => '2023-07-07',
        'end_day'           => '2023-08-10',
      ],
      [
        'creative_id'       => 2,
        'client_id'         => 3,
        'country_id'        => 2,
        'business_model_id' => 3,
        'name'              => 'test 2',
        'start_day'         => '2023-08-07',
        'end_day'           => '2023-08-10',
      ],
      [
        'creative_id'       => 3,
        'client_id'         => 3,
        'country_id'        => 3,
        'business_model_id' => 3,
        'name'              => 'test 3',
        'start_day'         => '2023-06-07',
        'end_day'           => '2023-07-10',
      ],
    ]);
  }
}
