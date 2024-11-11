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
    Schema::create('estudiantes', function (Blueprint $table) {
      $table->string('codigo', 6)->unique();
      $table->string('publickey')->nullable();
      $table->string('token')->nullable();
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
