<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('eleccion_partido', function (Blueprint $table) {
      $table->foreignId('eleccion_id')->constrained('elecciones')->onDelete('cascade');
      $table->foreignId('partido_id')->constrained('partidos')->onDelete('cascade');
      $table->primary(['eleccion_id', 'partido_id']);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('eleccion_partido');
  }
};
