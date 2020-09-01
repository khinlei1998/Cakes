<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class StaffController extends Controller
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
        $users=User::paginate(4);
        return view('backend.staff.read',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('backend.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           
          $request->validate([
        'name'=>'required|min:2',
        'address'=>'required',
         'phone'=>'required|max:191',
          'email' => 'required|unique:users|',
        'password' => 'required |min:8|confirmed',
            
           
        // // 'image'=>'required|mimes:jpeg,jpg,png|max:50000',
       
        ]);


         if($request->hasfile('image')){
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path().'/image',$name);

            $image = '/image/'.$name;
        }
        else{
            $image='image/default.jpg';
        }

        User::create([
            'name' => request('name'),
            'address' => request('address'),
            'phone' => request('phone'),
            'email' => request('email'),
            'image' => $image,
            'password' =>bcrypt($request->password),
            'role_id' => request('role_id'),



        ]);
        return redirect()->route('admin.staff.index')->with("notification", 'Created Successfully');

        // dd($request);
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
        $user = User::find($id);
       
        return view('backend.staff.edit',
        compact('user'));
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
            'name'=>'required|min:2',
            'address'=>'required',
             'phone'=>'required|max:191',
              'email' => 'required',
            // 'password' => 'required |min:8|confirmed',
                
               
            // // 'image'=>'required|mimes:jpeg,jpg,png|max:50000',
           
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
        
        $user = User::find($id);
        if($request->passsword==''){
            $user_password=$user->password;
        }else{
            $user_password=bcrypt($request->password);
        }

        $user->name=request('name');
     
        $user->image=$image;
        $user->address=request('address');

        $user->phone=request('phone');
        $user->email=request('email');
        $user->password=$user_password;

        
        $user->save();
        return redirect()->route('admin.staff.index')->with("notification", 'Updated Successfully');

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
         $user = User::find($id);
          /*dd($id);*/
        $user->delete();
        return back()->with("notification", 'Successfully Deleted');
    }
}
