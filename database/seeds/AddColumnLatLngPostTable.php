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
        $table->string('latitude')->nullable()->after('cnt_rank');
        $table->string('longitude')->nullable()->after('latitude');
      });
    }
}
