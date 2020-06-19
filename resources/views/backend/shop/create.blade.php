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
		<h3>Add New Shop</h3>
		<hr>

		<div class="row">

			<div class="col-md-6">
				<form action="{{route('admin.shop.store')}}" method="post" >
					@csrf
					<div class="form-group">
						<label for="name">Shop Name</label>
						<input type="text" name="name" id="name" class="form-control">
						@error('name')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Save">
					</div>
				</form>
				
			</div>
			
		</div>

		

	</div>

@endsection