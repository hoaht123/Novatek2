<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceVoucherTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vouchers', function (Blueprint $table) {
            $table->id('voucher_id');
            $table->string('voucher_name',100);
            $table->string('voucher_code',20);
            $table->integer('voucher_quantity');
            $table->string('voucher_options',50);
            $table->string('voucher_value',30);
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
        Schema::dropIfExists('Vouchers');
    }
}
