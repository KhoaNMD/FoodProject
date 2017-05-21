<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_rating', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->integer('post_id');
          $table->integer('food');
          $table->integer('space');
          $table->integer('serve');
          $table->integer('price');
          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::dropIfExists('tbl_rating');
    }
}
