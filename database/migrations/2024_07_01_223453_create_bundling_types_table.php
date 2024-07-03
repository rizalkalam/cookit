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
        Schema::create('bundling_types', function (Blueprint $table) {
            $table->id();
            $table->string('name_type');
            $table->foreignId('bundling_id')->nullable();
            $table->foreignId('menu_id');
            $table->integer('qty');
            $table->enum('status_bundling', ['on_bundling', 'off_bundling'])->default('off_bundling');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bundling_types');
    }
};
