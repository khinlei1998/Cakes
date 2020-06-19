<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
        // middle ka auth ka shi mhz out ka method tway lote
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $shops = Shop::all();
        return view('backend.shop.read',compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('backend.shop.create');
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
         $request->validate([
            'name' => 'required|min:2',
        ]);

        Shop::create([
            'name' => request('name'),
        ]);

        return redirect()->route('admin.shop.index')->with("notification","Created Successfully");;
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
         $shop=Shop::find($id);
        return view('backend.shop.edit',compact('shop'));
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
        $request->validate([
            'name' => 'required|min:2',
        ]);

          $shop=Shop::find($id);
        $shop->name=request('name');
        $shop->save();
        return redirect()->route('admin.shop.index')->with("notification","Updated Successfully");;
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
         $shop=Shop::find($id);
          $shop->delete();
          return back()->with("notification", 'Deleted Successfully');
    }
}
