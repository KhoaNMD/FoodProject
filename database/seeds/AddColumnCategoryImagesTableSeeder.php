<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;

class AddColumnCategoryImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::table('tbl_image', function (Blueprint $table) {
        $table->integer('category_image')->after('post_id');
      });
    }
}
