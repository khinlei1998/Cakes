<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' =>"Chocolate",
            
          
        ]); 

        DB::table('categories')->insert([
            'name' =>"Strawberry",
            
          
        ]); 

        DB::table('categories')->insert([
            'name' =>"Vanilla",
            
          
        ]); 
    }
}
