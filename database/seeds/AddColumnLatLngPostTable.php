<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;

class AddColumnLatLngPostTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::table('tbl_post', function (Blueprint $table) {
        $table->float('latitude',10,6)->nullable()->after('cnt_rank');
        $table->float('longitude',10,6)->nullable()->after('latitude');
      });
    }
}
