<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('id_transaction');
            $table->foreign('id_transaction')->references('id')->on('transactions');
            $table->unsignedbigInteger('id_product');
            $table->foreign('id_product')->references('id')->on('products');
            $table->bigInteger('unit_price');
            $table->integer('qty');
            $table->bigInteger('total_price');
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
        Schema::dropIfExists('detail_transactions');
    }
};
