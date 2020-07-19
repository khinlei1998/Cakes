<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use Auth;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cart');
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
        // dd($request);
        $phoneno = request('phoneno');
        $address = request('address');
        $product_json = request('arr');
        //dd($product_json);

        $mycartjson = json_decode($product_json);
        $mycart=$mycartjson->productlist;
        //dd($mycart);
        
        $total=0;
        $order_date = Carbon::now();

        $voucherno=uniqid();
       

        foreach ($mycart as $value) {

            $id=$value->id;
            $price=$value->product_price;
            $name=$value->product_name;
            $image=$value->product_image;
            $quantity=$value->quantity;

            $subtotal = $quantity*$price;

            $total += $subtotal;

            OrderDetail::create([
                'product_id'=>$id,
                'voucherno'=>$voucherno,
                'qty'=>$quantity,
            ]);

        }

        Order::create([
            'voucherno'=>$voucherno,
            'order_date' => $order_date,
            'total'=>$total,
            'user_id'=>Auth::user()->id,
        ]);
        
        return response()->json(['success'=>'Data is successfully added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
     
    
    //  dd($status);
        $order = Order::find($id);
       
        $order->status ="1";
        $order->save();
        return back()->with("notification", 'Order Confirm Successfully');;
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
