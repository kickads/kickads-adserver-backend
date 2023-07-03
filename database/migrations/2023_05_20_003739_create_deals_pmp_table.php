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
    Schema::create('deals_pmp', function (Blueprint $table) {
      // Propios de la entidad Deal
      $table->id();
      /*
       * TODO: agregar
       * materials_development_id
       * materials_upload_id
       */
      $table->foreignId('business_model_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('advertiser_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('entity_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('company_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('vertical_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('dsp_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
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
      // Propios de un Deal Pmp
      $table->string('other_vertical');
      $table->string('other_dsp');
      $table->string('seat_id');
      $table->string('materials_development');
      $table->string('materials_upload');
      $table->boolean('guaranteed')->default(0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('deals_pmp');
  }
};
