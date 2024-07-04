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
        Schema::create('how_to_cooks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->integer('step_number')->nullable();
            $table->string('title_instruction');
            $table->text('instruction');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('how_to_cooks');
    }
};