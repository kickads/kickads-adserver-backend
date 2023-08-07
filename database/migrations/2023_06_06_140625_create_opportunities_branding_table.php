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
      $table->foreignId('deals_branding_id')->nullable()->constrained('deals_branding')->cascadeOnUpdate()->nullOnDelete();
      $table->foreignId('country_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
      $table->foreignId('purchase_models_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete(); // Modelo de compra, CPC - CPI, CTM etc...
      $table->string('product'); // Nombre, debe ser lo mismo que el goal description del deal + material que se sube(dividedAd)
      $table->date('start_date');
      $table->date('end_date');
      $table->string('targeting');
      $table->string('comment');
      // Campos propios
      $table->foreignId('device_id')->constrained();
      $table->foreignId('format_id')->constrained(); // Formatos de distribución por ejemplo rich media, video, audio etc.
      $table->foreignId('action_id')->constrained();
      $table->tinyInteger('gross_agency_commission');
      $table->string('format_options'); // Opciones del formato, como medidas etc.
      $table->decimal('gross_rate');
      $table->decimal('net_rate'); // valor autocalculado.
      $table->decimal('available_rate'); // valor autocalculado.
      $table->decimal('budget');  // valor numérico, debe coincidir con el budget del deal
      $table->decimal('net_budget');
      $table->decimal('available_budget');
      $table->decimal('goal_units');
      $table->boolean('is_multi_carrier'); // Compañía telefonica
      // Campos video
//      $table->string('carrier_id'); // Compañía telefonica
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
