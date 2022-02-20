<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->id('product_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('supplier_id');
            $table->string('product_name');
            $table->string('product_slug',50);
            $table->string('product_price',100);
            $table->string('product_sku',50);
            $table->text('product_descriptions');
            $table->text('product_sort_descriptions');
            $table->string('product_image_gallery');
            $table->string('product_main_image');
           
            $table->integer('product_status');
            $table->integer('product_isHot')->default('0');
            $table->integer('product_isNew')->default('0');
            $table->integer('product_inStock')->default('0');
            $table->foreign('category_id')->references('category_id')->on('Categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('brand_id')->references('brand_id')->on('Brands')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('supplier_id')->references('supplier_id')->on('Suppliers')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('Product');
    }
}
