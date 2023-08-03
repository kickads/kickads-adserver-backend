<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $this->call([
      RoleSeeder::class,
      UserSeeder::class,
      BusinessModelSeeder::class,
      CountrySeeder::class,
      EntitySeeder::class,
      CompanySeeder::class,
      CurrencySeeder::class,
      AdvertiserSeeder::class,
//      DealSeeder::class,
      CampaignCategorySeeder::class,
      DspSeeder::class,
      IosSeeder::class,
      PrioritySeeder::class,
      VerticalSeeder::class,
      DealBrandingSeeder::class,
      DealPerformanceSeeder::class,
      DealPmpSeeder::class,
      CreativeSeeder::class,
      ClientSeeder::class,
      IntersticialSeeder::class,
      ClickSeeder::class,
      InteractionSeeder::class,
      ActionSeeder::class,
      DeviceSeeder::class,
      FormatSeeder::class,
      PurchaseModelSeeder::class,
    ]);
  }
}
