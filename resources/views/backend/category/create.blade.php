@extends('layouts.maintemplades')
@section('content_wrapper')


<h3>Add New Category</h3>
<hr>

		<div class="row">

			<div class="col-md-6">
				<form action="{{route('admin.category.store')}}" method="post" >
					@csrf
					<div class="form-group">
						<label for="name">Category Name</label>
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

	

@endsection