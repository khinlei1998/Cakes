@extends('layouts.maintemplades')
@section('content_wrapper')
<style>
.notification{
    animation:fadeOut 5s linear forwards; 
  }
  </style>
  @if(Session::has('notification'))
<div class="row notification">
<div class="col-md-8">
</div>
<div class="alert alert-success alert-dismissible col-md-4" role="alert">
{{Session::get('notification')}}
    <button type="button" id="close" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
</div>
</div>
@endif
<div class="container-fluid">
	<h3>Ediit Shop</h3>
</div>
<form action="{{route('admin.shop.update',$shop->id)}}" method="post">
	@method('PATCH')
	@csrf	
	<div class="form-group">
		
		<label>Shop Name:</label>
		<input type="text" name="name" class="form-control" value="{{$shop->name}}">
		@error('name')
		<div class="text-danger" style="">{{ $message }}</div>
		@enderror
		<hr>
		<input type="submit" name="btnsubmit" value="Update" class="btn btn-success">
		
	</div>


</form>
@endsection