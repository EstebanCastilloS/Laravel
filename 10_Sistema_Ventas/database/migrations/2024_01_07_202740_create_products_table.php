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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); //nombre
            $table->text('description')->nullable(); //descripcion
            $table->unsignedInteger('purchase_price')->nullable(); //precio_compra
            $table->unsignedInteger('sales_price')->nullable(); //precio_venta
            $table->unsignedInteger('minimum_price')->nullable(); //precio_minimo
            $table->integer('stock')->nullable()->default(0); //stock
            $table->integer('minimum_stock')->nullable()->default(10); //stock_minimo
            $table->string('image')->nullable(); //imagen
            $table->string('code')->nullable(); //codigo
            $table->string('code_bars')->nullable(); //codigo_barras
            $table->date('expiration_date')->nullable(); //fecha_vencimiento
            $table->boolean('active')->default(true); //activo
            $table->tinyInteger('iva')->default(0); //iva

            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
