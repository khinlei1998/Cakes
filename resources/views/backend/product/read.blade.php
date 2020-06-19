@extends('layouts.maintemplades')
@section('content_wrapper')

@if(Session::has('notification'))
<div class="row notification">
<div class="col-md-8">
</div>
<div class="alert alert-success col-md-4"role="alert">
 {{Session::get('notification')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
@endif
<body >
 
      <!-- Content Wrapper. Contains page content -->
     
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Product Detail Page</h3>
				           <a href="{{route('admin.product.create')}}"  class="btn btn-primary btn-circle btnadd" >Add product</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
					<th>No</th>
						<th>Name</th>
						<th>Image</th>
						<th>Price</th>
						<th>Category</th>
						<th>Description</th>
						<th>Action</th>
                    </tr>
                    </thead>
					<tbody>
					
					@php 
						$i = 1;
					@endphp

					@foreach($products as $product)
					
					<tr>
						<td>{{ $i++ }}</td>
						<td>{{$product->name}}</td>
						
						<td>
							<img src="{{$product->image}}" width="80" height="80">
						</td>
						<td>{{$product->price}}</td>
						<td>{{$product->category->name}}</td>
						
						<td>{{$product->description}}</td>
						<td>
					<a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i> &nbsp; Edit
						</a>



							<form style="display: inline;" action="{{route('admin.product.destroy',$product->id)}}" method="post">
								@method('DELETE')
								@csrf

									<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> &nbsp;Delete </button>
								</form>
						</td>
					</tr>
					@endforeach


				</tbody>
                    <tfoot>
                    <tr>
                      <th>No</th>
						<th>Name</th>
						<th>Image</th>
						<th>Price</th>
						<th>Category</th>
						<th>Description</th>
						<th>Action</th>
                    </tr>
                    </tfoot>
                  </table>
                  <div class="float-right">
                
                  </div>
                </div>
                <!-- /.card-body -->
              
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
     <!-- /.control-sidebar -->
 
  <!-- ./wrapper -->
</body>
@endsection
