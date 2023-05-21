<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DealPerformance>
 */
class DealPerformanceFactory extends Factory
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
      'net_budget'             => $this->faker->numberBetween(0, 120),
      'available_budget'       => $this->faker->numberBetween(0, 120),
      'saving_profit_percent'  => $this->faker->numberBetween(0, 120),
      'flow'                   => $this->faker->text(120),
      'tracking_method'        => $this->faker->text(100),
      'client_report'          => $this->faker->boolean(),
      'created_at'             => date('Y-m-d H:i:s'),
      'updated_at'             => date('Y-m-d H:i:s')
    ];
  }
}