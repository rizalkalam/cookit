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
            $table->double('protein');
            $table->double('lemak');
            $table->double('serat');
            $table->double('natrium');
            $table->double('kalori');
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
