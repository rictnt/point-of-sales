<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('brand_id');
            $table->foreignId('unit_id');
            
            $table->string('name')->unique();
            $table->float('price');
            $table->integer('stock_alert')->nullable();
            $table->string('barcode_type')->nullable();
            $table->string('sku')->nullable();

            $table->text('details')->nullable();
            $table->string('image')->nullable();

            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
