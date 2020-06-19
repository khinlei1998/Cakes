@extends('layouts.maintemplades')
@section('content_wrapper')

<h3>Edit Category</h3>

<div class="row">
	<div class="col-md-6">
	<form action="{{route('admin.category.update',$category->id)}}" method="post">
		@method('PATCH')
		@csrf	
		<div class="form-group">
			
			<label>Category Name:</label>
			<input type="text" name="category" class="form-control" value="{{$category->name}}">
			@error('category')
			<div class="text-danger" style="">{{ $message }}</div>
			@enderror
			<div class="form-group">
				<input type="submit" name="btnsubmit" value="Update" class="btn btn-success">
			</div>
			
		</div>
	</form>
	</div>
</div>

@endsection