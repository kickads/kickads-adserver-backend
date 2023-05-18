<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('roles')->insert([
      [
        'name'       => 'admin',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ],
      [
        'name'       => 'operations',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ],
      [
        'name'       => 'client-services',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ],
      [
        'name'       => 'finance',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ],
      [
        'name'       => 'comercial',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ],
      [
        'name'       => 'guest',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ]
    ]);
  }
}
