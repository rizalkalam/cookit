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
        Schema::create('tutorials_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->text('tutorial_1');
            $table->text('tutorial_2');
            $table->text('tutorial_3');
            $table->text('tutorial_4');
            $table->text('tutorial_5');
            $table->string('img_tutorial_1');
            $table->string('img_tutorial_2');
            $table->string('img_tutorial_3');
            $table->string('img_tutorial_4');
            $table->string('img_tutorial_5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutorials_menus');
    }
};
