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
    Schema::create('opportunities_performance', function (Blueprint $table) {
      $table->id();
      // Campos en común
      $table->foreignId('deals_performance_id')->constrained('deals_performance');
      $table->foreignId('country_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
      $table->foreignId('purchase_models_id')->constrained();
      $table->string('product');
      $table->string('start_date');
      $table->string('end_date');
      $table->string('targeting');
      $table->string('comment');
      // Campos propios
      $table->string('gross_rate');
      $table->string('net_rate');
      $table->string('available_rate');
      $table->string('goal_units');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('opportunities_performance');
  }
};
