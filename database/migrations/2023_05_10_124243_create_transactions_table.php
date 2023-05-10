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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('id_supplier');
            $table->foreign('id_supplier')->references('id')->on('suppliers');
            $table->unsignedbigInteger('id_customer');
            $table->foreign('id_customer')->references('id')->on('users');
            $table->enum('payment', ['BCA', 'Mandiri','BRI']);
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
        Schema::dropIfExists('transactions');
    }
};
