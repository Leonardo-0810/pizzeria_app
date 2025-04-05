<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tabla: users
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['cliente', 'empleado']);
            $table->timestamps();
        });

        // Tabla: clients
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users');
            $table->string('address')->nullable();
            $table->string('phone', 20)->nullable();
            $table->timestamps();
        });

        // Tabla: employees
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users');
            $table->enum('position', ['cajero', 'administrador', 'cocinero', 'mensajero']);
            $table->string('identification_number', 20);
            $table->decimal('salary', 8, 2);
            $table->date('hire_date');
            $table->timestamps();
        });

        // Tabla: branches
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->timestamps();
        });

        // Tabla: pizzas
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Tabla: pizza_size
        Schema::create('pizza_size', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pizza_id')->constrained('pizzas');
            $table->enum('size', ['pequeña', 'mediana', 'grande']);
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });

        // Tabla: ingredients
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Tabla: pizza_ingredient
        Schema::create('pizza_ingredient', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pizza_id')->constrained('pizzas');
            $table->foreignId('ingredient_id')->constrained('ingredients');
            $table->timestamps();
        });

        // Tabla: extra_ingredients
        Schema::create('extra_ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });

        // Tabla: orders
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('branch_id')->constrained('branches');
            $table->decimal('total_price', 8, 2);
            $table->enum('status', ['pendiente', 'en_preparacion', 'listo', 'entregado']);
            $table->enum('delivery_type', ['en_local', 'a_domicilio']);
            $table->foreignId('delivery_person_id')->nullable()->constrained('employees');
            $table->timestamps();
        });

        // Tabla: order_pizza
        Schema::create('order_pizza', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('pizza_size_id')->constrained('pizza_size');
            $table->integer('quantity');
            $table->timestamps();
        });

        // Tabla: order_extra_ingredient
        Schema::create('order_extra_ingredient', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('extra_ingredient_id')->constrained('extra_ingredients');
            $table->integer('quantity');
            $table->timestamps();
        });

        // Tabla: suppliers
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_info')->nullable();
            $table->timestamps();
        });

        // Tabla: raw_materials
        Schema::create('raw_materials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unit', 50);
            $table->decimal('current_stock', 8, 2);
            $table->timestamps();
        });

        // Tabla: purchases
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained('suppliers');
            $table->foreignId('raw_material_id')->constrained('raw_materials');
            $table->decimal('quantity', 8, 2);
            $table->decimal('purchase_price', 8, 2);
            $table->timestamp('purchase_date');
            $table->timestamps();
        });

        // Tabla: pizza_raw_material
        Schema::create('pizza_raw_material', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pizza_id')->constrained('pizzas');
            $table->foreignId('raw_material_id')->constrained('raw_materials');
            $table->decimal('quantity', 8, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pizza_raw_material');
        Schema::dropIfExists('purchases');
        Schema::dropIfExists('raw_materials');
        Schema::dropIfExists('suppliers');
        Schema::dropIfExists('order_extra_ingredient');
        Schema::dropIfExists('order_pizza');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('extra_ingredients');
        Schema::dropIfExists('pizza_ingredient');
        Schema::dropIfExists('ingredients');
        Schema::dropIfExists('pizza_size');
        Schema::dropIfExists('pizzas');
        Schema::dropIfExists('branches');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('users');
    }
};
