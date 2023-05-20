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
    Schema::create('deals_branding', function (Blueprint $table) {
      // Propios de la entidad Deal
      $table->id();
      $table->foreignId('business_model_id')->constrained();
      $table->foreignId('advertiser_id')->constrained();
      $table->foreignId('entity_id')->constrained();
      $table->foreignId('company_id')->constrained();
      $table->string('goal_description');
      $table->string('start_date');
      $table->string('end_date');
      $table->string('open_budget');
      $table->string('agency_commission');
      $table->string('budget_total');
      $table->string('goals_units');
      $table->string('exchange_rate');
      $table->string('campaign_name');
      $table->string('campaigns_restrictions');
      $table->string('comment');
      // Propios de un Deal branding
      $table->tinyInteger('net_budget');
      $table->tinyInteger('available_budget');
      $table->tinyInteger('saving_profit_percent');
      $table->boolean('client_report')->default(0);
      $table->integer('external_operation');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('deals_branding');
  }
};
