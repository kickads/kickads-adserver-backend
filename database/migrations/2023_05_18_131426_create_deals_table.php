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
      /*
       * TODO: agregar
       * executive_id
       * priority_id
       */
      $table->foreignId('business_model_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('advertiser_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('entity_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('company_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('ios_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('campaign_category_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('priority_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
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
