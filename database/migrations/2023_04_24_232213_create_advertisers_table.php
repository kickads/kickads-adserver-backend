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
    Schema::create('advertisers', function (Blueprint $table) {
      $table->id();
      $table->foreignId('company_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('entity_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->foreignId('country_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
      $table->foreignId('currency_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();;
      $table->string('name', '100');
      $table->string('prefix', '10');
      $table->string('address');
      $table->string('state', '50'); // Consultar en que consiste
      $table->string('zip_code', '20');
      $table->string('commercial_contact', '100'); // Ver de unificar esto con lo de abajo
      $table->string('commercial_email', '100');
      $table->string('net_payment', '100');
      $table->string('agency', '100');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('advertisers');
  }
};
