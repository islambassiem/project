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
    Schema::create('transferables', function (Blueprint $table) {
      $table->id();
      $table->string('name_en', 100);
      $table->string('code_en', 100);
      $table->string('name_ar', 100);
      $table->string('code_ar', 100);
      $table->smallInteger('hours');
      $table->foreignId('college_id')->constrained();
      $table->foreignId('user_id')->constrained();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('transferables');
  }
};
