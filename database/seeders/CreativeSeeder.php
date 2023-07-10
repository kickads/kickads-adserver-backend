<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreativeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('creatives')->insert([
      [
        'name' => 'touchAd'
      ],
      [
        'name' => 'testAd'
      ],
      [
        'name' => 'flipAd'
      ],
      [
        'name' => 'galleryAd'
      ],
      [
        'name' => 'catchingAd'
      ]
    ]);
  }
}
