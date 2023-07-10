<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClickSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('clicks')->insert([
      [
        'intersticial_id' => 2,
        'name'            => 'comprar',
      ],
      [
        'intersticial_id' => 1,
        'name'            => 'ver',
      ],
      [
        'intersticial_id' => 3,
        'name'            => 'ver mas',
      ],
    ]);
  }
}
