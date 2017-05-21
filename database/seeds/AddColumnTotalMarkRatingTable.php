<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;

class AddColumnTotalMarkRatingTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::table('tbl_rating', function (Blueprint $table) {
        $table->float('total_mark')->after('post_id');
      });
    }

    public function down(){

    }

}
