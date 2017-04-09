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
          $table->string("email");
          $table->string("website")->nullable();
          $table->string("phone");
          $table->text("describe");
          $table->integer("cnt_view")->nullable();
          $table->integer("cnt_rank")->nullable();
          $table->integer("category_id");
          $table->integer("thumb_id")->nullable();
          $table->integer("capacity");
          $table->integer("status")->nullable();
          $table->float("min_price");
          $table->float("max_price");
          $table->time("start_time");
          $table->time("end_time");
          $table->integer("insert_id")->nullable();
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
        Schema::drop('tbl_post');
    }
}
