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
    Schema::create('opportunities_pmp', function (Blueprint $table) {
      $table->id();
      // Campos en común
      $table->foreignId('country_id')->constrained();
      $table->foreignId('purchase_models_id')->constrained();
      $table->string('product');
      $table->string('start_date');
      $table->string('end_date');
      $table->string('targeting');
      $table->string('comment');
      // Campos propios
      $table->foreignId('format_id')->constrained();
      $table->foreignId('action_id')->constrained();
      $table->string('gross_agency_commission');
      $table->string('format_options');
      $table->string('budget');
      $table->string('budget_delivered');
      $table->string('goal_units');
      $table->string('receptivity');
      $table->string('cpm_floor_price_mow');
      $table->string('cpm_client_price');
      $table->string('fee_tech');
      $table->string('rentability');
      $table->string('ctr');
      $table->string('viewability');
      $table->string('url');
      $table->string('units_delivered');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('opportunities_pmp');
  }
};
