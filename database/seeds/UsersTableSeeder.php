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
        DB::table('users')->insert([
            'name' =>'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'address'=>'ygn',
            'phone'=>'0877',
            'image'=> 'https://s3.amazonaws.com/37assets/svn/765-default-avatar.png',
            'role_id'=> 1,
        ]);
    }
}
