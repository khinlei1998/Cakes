<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Order extends Model
{
    //
    protected $fillable = [
    	'voucherno','order_date','total','user_id'];

public function user(){
	return $this->belongsTo('App\User');
}


}

