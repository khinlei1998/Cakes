<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            'name' =>"Shop1",

        ]); 
        DB::table('shops')->insert([
            'name' =>"Shop2",

        ]); 

        DB::table('shops')->insert([
            'name' =>"Shop3",

        ]); 
    }
}
