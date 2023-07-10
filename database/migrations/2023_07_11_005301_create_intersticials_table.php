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
    Schema::create('intersticials', function (Blueprint $table) {
      $table->id();
      $table->foreignId('creative_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
      $table->foreignId('client_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
      $table->foreignId('country_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
      $table->foreignId('business_model_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
      $table->string('name');
      $table->date('start_day');
      $table->date('end_day');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('intersticials');
  }
};
