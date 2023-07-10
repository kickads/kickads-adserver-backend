<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InteractionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('interactions')->insert([
      [
        'intersticial_id' => 2,
        'name'            => 'abrir',
      ],
      [
        'intersticial_id' => 1,
        'name'            => 'cerrar',
      ],
      [
        'intersticial_id' => 3,
        'name'            => 'tocar',
      ],
    ]);
  }
}
