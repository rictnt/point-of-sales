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
            $table->string('product_name');
            $table->integer('serial_number');
            $table->string('product_model');
            $table->integer('category_id');
            $table->float('purchase_price')->nullable();
            $table->string('product_unit');
            $table->float('selling_price');
            $table->string('tax_vat');
            $table->longText('product_details');
            $table->string('product_image');
            $table->integer('product_status')->default(1);
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
