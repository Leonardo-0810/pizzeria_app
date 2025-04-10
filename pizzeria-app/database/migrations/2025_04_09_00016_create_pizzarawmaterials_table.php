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
        Schema::create('pizzarawmaterials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pizzas_id')->constrained();
            $table->foreignId('raw_materials_id')->constrained('rawmaterials');
            $table->decimal('quantity', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzarawmaterials');
    }
};
