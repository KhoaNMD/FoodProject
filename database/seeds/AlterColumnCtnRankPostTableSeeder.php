<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;

class AlterColumnCtnRankPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::table('tbl_post', function (Blueprint $table) {
        $table->float('cnt_rank')->change();
      });
    }
}
