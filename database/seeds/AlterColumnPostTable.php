<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;

class AlterColumnPostTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::table('tbl_post', function (Blueprint $table) {
        $table->integer('min_price')->change();
        $table->integer('max_price')->change();
      });
    }
}
