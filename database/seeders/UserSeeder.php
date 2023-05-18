<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      [
        'name'       => 'Guillermo Ojeda',
        'email'      => 'guillermo.ojeda@kickads.mobi',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ],
      [
        'name'       => 'Hernan Arica',
        'email'      => 'hernan.arica@kickads.mobi',
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
      ],
    ]);

    $users = User::all();

    foreach ($users as $user) {
      $user->assignRole('admin');
    }
  }
}
