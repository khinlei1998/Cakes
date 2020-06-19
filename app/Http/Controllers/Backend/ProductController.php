<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\Shop;


class ProductController extends Controller
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


       
      $products = Product::paginate(5);

       
       return view('backend.product.read', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         
         $categories=Category::all();
         $shops=shop::all();

         
        return view('backend.product.create',compact('categories','shops'));
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
            
            'image' => 'required|mimes:jpeg,jpg,png',
            'price'  => 'required',
            'category_id' => 'required',
            'description'  => 'required',
            'shop_id' => 'required',
        ]);

        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path().'/image',$name);

            $image = '/image/'.$name;
        }
        else{
            $image=$request('oldimg');
        }

        Product::create([
            'name' => request('name'),
            'image' => $image,
            'price'  => request('price'),
            'category_id' => request('category_id'),
            'shop_id' => request('shop_id'),

            'description' => request('description'),
        ]);

        return redirect()->route('admin.product.index')->with("notification", 'Created Successfully');;

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
        $shops=Shop::all();
        $product = Product::find($id);
        $categories=Category::all();
        return view('backend.product.edit',
        compact('product','categories','shops'));
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
            
            // 'image' => 'required|mimes:jpeg,jpg,png|max:5000',
            'price'  => 'required|min:2',
            'category_id' => 'required',
            'shop_id' => 'required',
            'description'  => 'required|min:2',
        ]);

        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path().'/image',$name);

            $image = '/image/'.$name;
        }
        else{
            $image=request('oldimg'); 
        }
         

        $product = Product::find($id);
        $product->name=request('name');
     
        $product->image=$image;
        $product->price=request('price');

        $product->category_id=request('category_id');
        $product->shop_id=request('shop_id');
        $product->description=request('description');
        
        $product->save();
        return redirect()->route('admin.product.index')->with("notification", 'Updated Successfully');;
        
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
         $product = Product::find($id);
          /*dd($id);*/
        $product->delete();
        return back()->with("notification", 'Deleted Successfully');
    }
}
