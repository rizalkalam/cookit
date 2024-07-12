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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('order_id');
            $table->string('menu_name');
            $table->string('menu_type');
            $table->string('menu_dsc');
            $table->integer('qty');
            $table->double('total_price');
            $table->enum('status', ['on_processed', 'in_delivery', 'received', 'completed', 'rejected'])->default('on_processed');
            $table->foreignId('address_user_id');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
