<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Invoices', function (Blueprint $table) {
            $table->id('invoice_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('shipping_id');
            $table->string('invoice_code',10);
            $table->integer('quantity');
            $table->string('total');
            $table->foreign('user_id')->references('user_id')->on('Users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('shipping_id')->references('shipping_id')->on('Shipping')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('Invoices');
    }
}
