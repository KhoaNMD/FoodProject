<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;

class AddColumnAvgPricePostTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::table('tbl_post', function (Blueprint $table) {
        $table->integer('avg_food_price');
      });
    }
}
