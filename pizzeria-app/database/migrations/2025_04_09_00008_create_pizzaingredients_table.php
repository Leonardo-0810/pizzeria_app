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
        Schema::create('pizzaingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pizzas_id')->constrained('pizzas');
            $table->foreignId('ingredients_id')->constrained('ingredients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzaingredients');
    }
};
