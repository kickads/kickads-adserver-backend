<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advertiser>
 */
class AdvertiserFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'company_id'         => $this->faker->numberBetween(1, 5),
      'entity_id'          => $this->faker->numberBetween(1, 5),
      'country_id'         => $this->faker->numberBetween(1, 20),
      'currency_id'        => $this->faker->numberBetween(1, 10),
      'name'               => $this->faker->company(),
      'prefix'             => $this->faker->companySuffix(),
      'address'            => $this->faker->address(),
      'state'              => $this->faker->streetAddress(),
      'zip_code'           => $this->faker->countryCode(),
      'commercial_contact' => $this->faker->companyEmail(),
      'commercial_email'   => $this->faker->email(),
      'net_payment'        => $this->faker->randomFloat(2, 100, 2000),
      'agency'             => $this->faker->company(),
      'created_at'         => date('Y-m-d H:i:s'),
      'updated_at'         => date('Y-m-d H:i:s')
    ];
  }
}
