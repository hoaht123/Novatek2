<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Socials', function (Blueprint $table) {
            $table->id('social_id');
            $table->string('provider_id',100);
            $table->string('provider',20);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('Users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('Socials');
    }
}
