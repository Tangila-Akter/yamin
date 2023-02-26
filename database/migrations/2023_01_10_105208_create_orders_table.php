<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('shepping_address_id')->unsigned();
            $table->bigInteger('belling_address_id')->unsigned();
            $table->foreign('shepping_address_id')->references('id')->on('shepping_addresses')->onDelete('cascade');
            $table->foreign('belling_address_id')->references('id')->on('belling_addresses')->onDelete('cascade');
            $table->string('total');
            $table->string('product_id');
            $table->string('currency');
            $table->string('user_id');
            $table->string('transaction_id');
            $table->string('status');

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
        Schema::dropIfExists('orders');
    }
};
