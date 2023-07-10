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
    Schema::create('interactions_log_per_day', function (Blueprint $table) {
      $table->id();
      $table->foreignId('intersticial_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
      $table->string('name');
      $table->integer('total')->default(0);
      $table->date('date');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('interactions_log_per_day');
  }
};
