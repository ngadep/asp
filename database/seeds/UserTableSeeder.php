<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name"      => "admin",
                "email"     => "admin@asp.com",
                "password"  => bcrypt("123")
            ]
        ];


        foreach ($users as $user) {
	        DB::table('users')->insert($user);
        }
    }
}
