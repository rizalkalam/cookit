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
        Schema::create('live_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('delivery');
            $table->date('pre_order_from');
            $table->date('pre_order_until');
            $table->foreignId('appetizer_menu_id')->nullable();
            $table->foreignId('main_course_menu_id')->nullable();
            $table->foreignId('dessert_menu_id')->nullable();
            $table->enum('status', ['empty', 'uncompleted', 'live'])->default('empty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('live_products');
    }
};
