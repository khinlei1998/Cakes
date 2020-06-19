@extends('layouts.maintemplades')
@section('content_wrapper')
@foreach($orderdetails as $orderdetail)
<div class="card mb-3"  >
  <div class="row no-gutters">
    <div class="col-md-6 " style="padding: 2px;">
     <img src="{{$orderdetail->image}}" style="height:180px; width:276px; padding: 2px; margin-left: 10px;">
    </div>
	<div class="col-md-6">
      <div class="card-body">

        <h5 class="card-title">Vouncher No::{{$orderdetail->voucherno}}</h5>
        <p class="card-text">Quantity{{$orderdetail->qty}}</p>
        <p class="card-text">Product Name:{{$orderdetail->pname}}</p>
         <p class="card-text">Product Price:{{$orderdetail->price}}</p>
          <p class="card-text">Category Name:{{$orderdetail->name}}</p>
       
        <p class="card-text"></p>

        
      </div>
    </div>
</div>
</div>

@endforeach	

@endsection
