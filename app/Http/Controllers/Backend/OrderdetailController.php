<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class OrderdetailController extends Controller
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
        //

         // $orderdetails = DB::table('order_details')
         //        ->join('orders','orders.user_id','=','user_id.user_id')
         //        // ->join('users', 'users.id', '=', 'orders.user_id')
         //        ->select('order_details.*','users.*')
         //        ->where('orders_details.status', '=', 0)
         //        ->get();

        $orderdetails = DB::table('order_details')
                        ->join('orders','orders.voucherno','=','order_details.voucherno')
                        ->join('users','users.id','=','orders.user_id')
                        ->select('order_details.*','users.*')
                        ->where('orders.status',0)
                        ->get();
        return view('backend.OrderDetail.read',compact('orderdetails'));
        
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
        //
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
        //
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
