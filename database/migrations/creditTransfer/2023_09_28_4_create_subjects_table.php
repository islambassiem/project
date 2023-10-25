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
    Schema::create('subjects', function (Blueprint $table) {
      $table->id();
      $table->string('name', 100);
      $table->string('code', 100);
      $table->smallInteger('hours');
      $table->foreignId('user_id')->constrained();
      $table->foreignId('college_id')->constrained();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('subjects');
  }
};
