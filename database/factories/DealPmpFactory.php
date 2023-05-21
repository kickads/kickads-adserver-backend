<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DealPmp>
 */
class DealPmpFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'business_model_id'      => $this->faker->numberBetween(1, 4),
      'advertiser_id'          => $this->faker->numberBetween(1, 20),
      'entity_id'              => $this->faker->numberBetween(1, 5),
      'company_id'             => $this->faker->numberBetween(1, 5),
      'goal_description'       => $this->faker->text(),
      'start_date'             => $this->faker->date('Y-m-d'),
      'end_date'               => $this->faker->date('Y-m-d'),
      'open_budget'            => $this->faker->boolean(),
      'budget_total'           => $this->faker->boolean(),
      'agency_commission'      => $this->faker->randomFloat(2, 100, 200),
      'goals_units'            => $this->faker->randomFloat(2, 100, 200),
      'exchange_rate'          => $this->faker->randomFloat(3, 100, 2000),
      'campaign_name'          => $this->faker->name(),
      'campaigns_restrictions' => $this->faker->text(),
      'comment'                => $this->faker->realText(100),
      'vertical'               => $this->faker->text(),
      'other_vertical'         => $this->faker->text(),
      'other_dsp'              => $this->faker->text(),
      'seat_id'                => $this->faker->randomDigit(),
      'materials_development'  => $this->faker->text(),
      'materials_upload'       => $this->faker->text(),
      'guaranteed'             => $this->faker->boolean(),
      'created_at'             => date('Y-m-d H:i:s'),
      'updated_at'             => date('Y-m-d H:i:s')
    ];
  }
}
