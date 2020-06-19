<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('admin', function () {
//     return view('templades');
// });
Route::resource('/','frontend\ShowController');
Route::resource('/orders','OrderController');

Route::post('orders/savecart','OrderController@store');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


// forn backend
Route::group([
'prefix'=>'backend' ,'as'=>'admin.'],
function(){
	Route::resource('/category','Backend\CategoryController');
	Route::resource('/product','Backend\ProductController');
	Route::resource('/staff','Backend\StaffController');
	Route::resource('/user','Backend\TemplateController');
	Route::resource('/shop','Backend\ShopController');

	Route::resource('/order','Backend\OrderController');
	Route::resource('/confirmorder','Backend\OrderController@update');
	// Route::resource('/orderdetail','Backend\OrderdetailController');
	

});

Auth::routes();


