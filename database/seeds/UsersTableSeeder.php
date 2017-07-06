<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new \App\User();
        $user->name="inut";
        $user->username="admin";
        $user->email="nut_memory20@hotmail.com";
        $user->password=bcrypt('12345');
        $user->save();


    }
}
