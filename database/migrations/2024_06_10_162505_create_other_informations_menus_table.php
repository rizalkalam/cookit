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
        Schema::create('other_informations_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->string('material_sent_1');
            $table->string('material_sent_2');
            $table->string('material_sent_3');
            $table->string('material_sent_4');
            $table->string('material_sent_5');
            $table->string('material_sent_6');
            $table->string('material_sent_7');
            $table->string('material_sent_8');
            $table->integer('qty_sent');
            $table->string('unit_sent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_informations_menus');
    }
};
