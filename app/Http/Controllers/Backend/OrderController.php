<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\Orderdetail;




class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

             $comfirmorders = DB::table('orders')
                ->join('users', 'users.id', '=', 'orders.user_id')
                ->select('orders.*','users.*')
                ->where('status', '=', 1)
                ->get();

            //     $users = DB::table('users')
            // ->join('contacts', 'users.id', '=', 'contacts.user_id')
           
            // ->select('users.*', 'contacts.phone', 'orders.price')
            // ->get();


             $allorders = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'orders.*')
            ->where('status','=',0)
            ->get();

         
               
                return view('backend.Order.read',compact('allorders','comfirmorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $orderdetails = DB::table('order_details')->where('voucherno', '=', $id)
        ->join('products', 'products.id', '=', 'order_details.product_id')
        ->join('categories','categories.id','=', 'products.category_id')
        ->select('order_details.*', 'products.*', 'categories.*','products.name as pname')
        ->get();
      

        return view('backend.Order.show', compact('orderdetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
