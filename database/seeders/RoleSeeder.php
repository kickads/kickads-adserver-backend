<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        'guard_name' => 'admin',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ],
      [
        'name'       => 'operations',
        'guard_name' => 'operations',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ],
      [
        'name'       => 'client-services',
        'guard_name' => 'client-services',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ],
      [
        'name'       => 'finance',
        'guard_name' => 'finance',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ],
      [
        'name'       => 'comercial',
        'guard_name' => 'comercial',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ]
    ]);
  }
}