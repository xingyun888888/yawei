<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeBigImgTable extends Migration
{
    /**
     * Run the migrations.
     *homeBigImg
     * @return void
     */
    public function up()
    {
         //
         Schema::create('homeBigImg', function (Blueprint $table) {
            $table->increments('id');
            $table->string('home_big_img_title');
            $table->string('home_big_img_describe');
            $table->string("home_big_img");
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
        //
        Schema::drop("homeBigImg");
    }
}
