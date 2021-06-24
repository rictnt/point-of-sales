<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id');
            $table->string('invoice_no');
            $table->integer('sub_total');
            $table->string('discount_type')->default('fixed');
            $table->string('discount')->nullable();
            $table->integer('grand_total');
            $table->integer('paid');
            $table->integer('due');
            $table->string('payment_method')->nullable();
            $table->integer('product_status')->nullable();
            $table->integer('status')->default(1);
            $table->date('date')->default(now());
            $table->date('expire_date')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
