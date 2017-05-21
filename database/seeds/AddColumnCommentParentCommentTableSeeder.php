<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;

class AddColumnCommentParentCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::table('tbl_comment', function (Blueprint $table) {
        $table->integer('comment_parent_id')->after('post_id');
      });
    }
}
