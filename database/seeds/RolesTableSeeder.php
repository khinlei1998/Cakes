<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
		

        DB::table('roles')->insert([
            'name' =>"Owner",
          
        ]); 


        DB::table('roles')->insert([
            'name' =>"Staff",
          
        ]);

        DB::table('roles')->insert([
            'name' =>"Customer",
          
        ]); 
      
   
}
}
