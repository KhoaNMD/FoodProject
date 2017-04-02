<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_post', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string("address");
            $table->integer("status");
            $table->integer("cnt_view");
          $table->integer("cnt_comment");
          $table->integer("cnt_rank");
          $table->integer("category_id");
          $table->integer("thumb_id");
          $table->integer("insert_id");
          $table->string("phone_number");
          $table->float("min_price");
          $table->float("max_price");
          $table->dateTime("start_hour");
          $table->dateTime("end_hour");
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
        Schema::dropIfExists('tbl_post');
    }
}
