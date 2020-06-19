@extends('layouts.maintemplades')
@section('content_wrapper')

	<div class="container-fluid">
		<h3>Add New Product</h3>
		<hr>

		<div class="row">

			<div class="col-md-8">

				<form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
					
					@csrf

					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" >
						@error('name')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
					</div>

					

					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" class="form-control" >
						@error('image')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
					</div>


					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control" >
						@error('price')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group">
						<label>Category</label>
						<select name="category_id" class="form-control">
							<option value="">Choose Category</option>
								@foreach($categories as $category)

								<option value ="{{$category->id}}">
									
									{{$category->name}}</option>
							@endforeach
						</select>
						@error('category_id')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group">
						<label>Shop</label>
						<select name="shop_id" class="form-control">
							<option value="">Choose Shop</option>
							@foreach($shops as $shop)

							<option value ="{{$shop->id}}">
								
								{{$shop->name}}</option>
							@endforeach
						</select>
						@error('shop_id')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group">
						<label>description</label>
						<textarea name="description" class="form-control"></textarea>
						@error('description')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-primary">
						
					</div>
					
				</form>
				
			</div>
			
		</div>
	</div>

	
@endsection
