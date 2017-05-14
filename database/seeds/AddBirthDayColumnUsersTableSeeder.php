<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;

class AddBirthDayColumnUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::table('tbl_users', function (Blueprint $table) {
        $table->string('phone')->after('address');
        $table->date('birthday')->after('phone');
      });
    }
}
