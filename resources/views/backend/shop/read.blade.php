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
                  <h3 class="card-title">Shop Detail Page</h3>
				           <a href="{{route('admin.shop.create')}}"  class="btn btn-primary btn-circle btnadd" >Add Shop</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
					<th>No</th>
					<th>Name</th>
					<th>Ation</th>
                    </tr>
                    </thead>
						<tbody>
						
					
						@php 
					$i = 1;
				@endphp

				@foreach($shops as $shop)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$shop->name}}</td>
					
					
					
					<td>
				<a href="{{route('admin.shop.edit', $shop->id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i> &nbsp; Edit
					</a>



						 <form style="display: inline;" action="{{route('admin.shop.destroy',$shop->id)}}" method="post">
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
					<th>Ation</th>
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
<script> //time that mhat bl lout ms mhar pyaut ma lal xo tr
  setTimeout(Close, 4500); //close ka out a function call tr

//after appear success ,close p row pyaut twar phoe
function Close(){ 
  $('.notification').remove(); //noti ka session ka pr lr tae hr, $ka jquery moz
}

</script>