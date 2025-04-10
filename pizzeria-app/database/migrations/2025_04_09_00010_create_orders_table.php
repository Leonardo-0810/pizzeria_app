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
            $table->foreignId('branches_id')->constrained();
            $table->foreignId('clients_id')->constrained();
            $table->decimal('total_price', 8, 2);
            $table->enum('status', ['pendiente', 'en_preparacion', 'listo', 'entregado']);
            $table->enum('delivery_type', ['en_local', 'a_domicilio']);
            $table->foreignId('delivery_person_id')->nullable()->constrained('employees');
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
