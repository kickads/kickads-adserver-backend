<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('clients')->insert([
      [
        'name' => 'pepsi'
      ],
      [
        'name' => 'apple'
      ],
      [
        'name' => 'samsung'
      ],
      [
        'name' => 'naldo'
      ],
      [
        'name' => 'liliana'
      ],
      [
        'name' => 'meta'
      ],
    ]);
  }
}
