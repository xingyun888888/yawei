<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('portfolio',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('portfolio_img_url');
            $table->string('portfolio_title');
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
		  Schema::dropIfExists('portfolio');
    }
}
