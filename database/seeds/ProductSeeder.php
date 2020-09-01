<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' =>"Cake2",
            'image'=>"/image/Strawberry-Cake-4.jpg",
            'price'=>"  5000",
            'category_id'=>2,
            'shop_id'=>1,
            'description'=>"This Black Forest Cake combines rich chocolate cake layers with fresh cherries, cherry liqueur,"
          
        ]); 

        DB::table('products')->insert([
            'name' =>"Cake3",
            'image'=>"/image/IMG_4887.JPG",
            'price'=>"  4400",
            'category_id'=>2,
            'shop_id'=>2,
            'description'=>"This Homemade Strawberry Cake is full of sweet, fresh strawberry flavor! Moist strawberry cake ..."
          
        ]); 

        DB::table('products')->insert([
            'name' =>"Cake2",
            'image'=>"/image/IMG_4869.JPG",
            'price'=>"  5000",
            'category_id'=>1,
            'shop_id'=>3,
            'description'=>"This Black Forest Cake combines rich chocolate cake layers with fresh cherries, cherry liqueur,"
          
        ]); 

        DB::table('products')->insert([
            'name' =>"Cake4",
            'image'=>"/image/IMG_4835.JPG",
            'price'=>"  7000",
            'category_id'=>3,
            'shop_id'=>1,
            'description'=>"Enjoy your summer fruits and sangria together in cake form! This summer sangria cake is packed full"
          
        ]); 

        DB::table('products')->insert([
            'name' =>"Cake5",
            'image'=>"/image/IMG_4829.JPG",
            'price'=>"  8000",
            'category_id'=>1,
            'shop_id'=>2,
            'description'=>"Makeup fondant decorations (you can make these yourself using different colored fondant and/or gum paste or just buy them on Etsy!)
            White Sugar Pearls"
          
        ]); 
    }
}
