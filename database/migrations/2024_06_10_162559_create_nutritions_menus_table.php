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
        Schema::create('nutritions_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->double('karbohidrat');
            $table->foreignId('karbohidrat_unit_id');
            $table->double('protein');
            $table->foreignId('protein_unit_id');
            $table->double('lemak');
            $table->foreignId('lemak_unit_id');
            $table->double('serat');
            $table->foreignId('serat_unit_id');
            $table->double('natrium');
            $table->foreignId('natrium_unit_id');
            $table->double('kalori');
            $table->foreignId('kalori_unit_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutritions_menus');
    }
};
