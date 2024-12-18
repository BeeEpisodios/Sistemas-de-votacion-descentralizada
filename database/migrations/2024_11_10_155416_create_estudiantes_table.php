<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  // **************************tabla estudiantes**************************
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('estudiantes', function (Blueprint $table) {
      $table->string('codigo', 6)->unique();
      $table->string('publickey')->nullable();
      $table->string('token')->nullable();
      $table->boolean('estado')->default(false);
      $table->boolean('enviado')->default(false);
      $table->primary(['codigo']);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('estudiantes');
  }
};
