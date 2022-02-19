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
            $table->string('product_image');
            $table->string('product_image_gallery');
            $table->string('product_main_image');
            $table->unsignedBigInteger('cpu_speed_id')->default('0');
            $table->unsignedBigInteger('core_id')->default('0');
            $table->unsignedBigInteger('socket_id')->default('0');
            $table->unsignedBigInteger('size_form_id')->default('0');
            $table->unsignedBigInteger('memory_size_id')->default('0');
            $table->unsignedBigInteger('memory_type_id')->default('0');
            $table->unsignedBigInteger('bus_id')->default('0');
            $table->unsignedBigInteger('color_id')->default('0');
            $table->unsignedBigInteger('fan_qty_id')->default('0');
            $table->unsignedBigInteger('storage_type_id')->default('0');
            $table->unsignedBigInteger('storage_capacity_id')->default('0');
            $table->unsignedBigInteger('cpu_id')->default('0');
            $table->unsignedBigInteger('memory_card_id')->default('0');
            $table->unsignedBigInteger('video_output_id')->default('0');
            $table->unsignedBigInteger('power_id')->default('0');
            $table->unsignedBigInteger('efficiency_id')->default('0');
            $table->unsignedBigInteger('fan_size_id')->default('0');
            $table->unsignedBigInteger('key_qty_id')->default('0');
            $table->unsignedBigInteger('wireless_id')->default('0');
            $table->unsignedBigInteger('switch_id')->default('0');
            $table->unsignedBigInteger('dpi_id')->default('0');
            $table->unsignedBigInteger('headphone_type_id')->default('0');
            $table->unsignedBigInteger('micro_id')->default('0');
            $table->unsignedBigInteger('resolution_id')->default('0');
            $table->unsignedBigInteger('moniter_size_id')->default('0');
            $table->unsignedBigInteger('refresh_rate_id')->default('0');
            $table->integer('product_status');
            $table->integer('product_isHot')->default('0');
            $table->integer('product_isNew')->default('0');
            $table->integer('product_inStock')->default('0');
            $table->foreign('category_id')->references('category_id')->on('Categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('brand_id')->references('brand_id')->on('Brands')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('supplier_id')->references('supplier_id')->on('Suppliers')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('cpu_speed_id')->references('id')->on('Cpu_speed')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('core_id')->references('id')->on('Core')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('socket_id')->references('id')->on('Socket_type')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('size_form_id')->references('id')->on('Size_form')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('memory_size_id')->references('id')->on('Size_form')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('memory_type_id')->references('id')->on('Memory_type')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('bus_id')->references('id')->on('Bus_speed')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('Color')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fan_qty_id')->references('id')->on('Fan_qty')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('storage_type_id')->references('id')->on('Storage_type')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('storage_capacity_id')->references('id')->on('Storage_capacity')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cpu_id')->references('id')->on('Cpu')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('memory_card_id')->references('id')->on('Memory_card')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('video_output_id')->references('id')->on('Video_output')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('power_id')->references('id')->on('Power')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('efficiency_id')->references('id')->on('Efficiency')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fan_size_id')->references('id')->on('Fan_size')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('key_qty_id')->references('id')->on('Key_qty')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('wireless_id')->references('id')->on('Wireless')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('switch_id')->references('id')->on('Switch')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('dpi_id')->references('id')->on('Dpi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('headphone_type_id')->references('id')->on('Headphone_type')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('micro_id')->references('id')->on('Micro')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('resolution_id')->references('id')->on('Resolution')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('moniter_size_id')->references('id')->on('Monitor_size')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('refresh_rate_id')->references('id')->on('Refresh_rate')->onUpdate('cascade')->onDelete('cascade');
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
