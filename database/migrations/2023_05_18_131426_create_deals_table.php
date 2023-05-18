<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('deals', function (Blueprint $table) {
      $table->id();
      $table->foreignId('business_model_id')->constrained();
      $table->foreignId('advertiser_id')->constrained();
      $table->foreignId('entity_id')->constrained();
      $table->foreignId('company_id')->constrained();
      $table->string('agency_fee');
      $table->string('agency');
      $table->string('goal_description');
      $table->string('start_date');
      $table->string('end_date');
      $table->string('open_budget');
      $table->string('available_budget');
      $table->string('goals_units');
      $table->string('exchange_rate');
      $table->string('campaign_name');
      $table->string('campaigns_restrictions');
      $table->string('external_operation');
      $table->string('comment');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('deals');
  }
};
