<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
     protected $fillable = [
    	'name','image','price','category_id','shop_id','description'];

	public function category(){
 		return $this->belongsTo('App\Category');
 }
}
