<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $fillable = [
    	'order_id','voucherno','product_id','qty'];
    	

}
