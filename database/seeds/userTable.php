<?php

use Illuminate\Database\Seeder;
use App\user;
use Illuminate\Support\Facades\Hash;
class userTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        user::insert(['name'=>'admin','email'=>'admin@admin.com','password' => Hash::make('12345'),'user_role'=>'1']);

    }
}
