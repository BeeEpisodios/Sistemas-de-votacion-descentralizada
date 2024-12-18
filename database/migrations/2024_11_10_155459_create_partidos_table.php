<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  // **************************tabla de listas**************************
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('partidos', function (Blueprint $table) {
      $table->id();
      $table->string('nombre')->unique();
      $table->string('logo')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('partidos');
  }
};
