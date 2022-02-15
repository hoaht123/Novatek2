<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Shipping', function (Blueprint $table) {
            $table->id('shipping_id');
            $table->string('shipping_name',50);
            $table->string('shipping_email',100);
            $table->string('shipping_phone',20);
            $table->string('shipping_note');
            $table->string('shipping_address',100);
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
        Schema::dropIfExists('Shipping');
    }
}
