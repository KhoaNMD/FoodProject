<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPhoneColumnUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::table('tbl_users', function (Blueprint $table) {
        $table->string('phone',12)->nullable()->change();
      });
    }
}
