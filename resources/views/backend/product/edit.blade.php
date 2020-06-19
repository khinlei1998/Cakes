@extends('layouts.maintemplades')
@section('content_wrapper')

	<div class="container-fluid">
		<h3>Edit Product</h3>
		<hr>

		<div class="row">

			<div class="col-md-8">

			<form action="{{route('admin.product.update',$product->id)}}" method="post" enctype="multipart/form-data">
			@method('PATCH')
					@csrf

					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control"value="{{$product->name}}" >
						@error('name')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
					</div>


					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" class="form-control" >
						<img src="{{$product->image}}" class="img-fluid" style="width: 150px; height:150px">
						<input type="hidden" name="oldimg" value="{{$product->image}}">
						@error('image')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
					</div>


					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control" value="{{$product->price}}" >
						@error('price')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group">
						<label>Category</label>
						<select name="category_id" class="form-control">
							@foreach($categories as $category)
							<option value ="{{$category->id}}">
							@if($product->category_id== $category->id)	
							@endif
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
							
							@foreach($shops as $shop)

							<option value ="{{$shop->id}}">
							@if($product->shop_id==$shop->id)
							@endif
							
							
							{{$shop->name}}</option>
							@endforeach
						</select>
						@error('shop_id')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group">
						<label>Description</label>
						<textarea name="description" class="form-control">{{$product->description}}</textarea>
						@error('description')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group">
						<input type="submit" value="Update"class="btn btn-primary">
						
					</div>
					
				</form>
				
			</div>
			
		</div>
	</div>

	
@endsection
