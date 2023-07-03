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
    Schema::create('opportunities_branding', function (Blueprint $table) {
      $table->id();
      // Campos en común
      $table->foreignId('deals_branding_id')->nullable()->constrained('deals_branding')->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('country_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
      $table->foreignId('purchase_models_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->string('product');
      $table->string('start_date');
      $table->string('end_date');
      $table->string('targeting');
      $table->string('comment');
      // Campos propios
      $table->foreignId('device_id')->constrained();
      $table->foreignId('format_id')->constrained();
      $table->foreignId('action_id')->constrained();
      $table->string('gross_agency_commission');
      $table->string('format_options');
      $table->string('gross_rate');
      $table->string('net_rate');
      $table->string('available_rate');
      $table->string('budget');
      $table->string('budget_delivered');
      $table->string('net_budget');
      $table->string('available_budget');
      $table->string('goal_units');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('opportunities_branding');
  }
};
