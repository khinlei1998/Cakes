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
					<button class="btn btn-primary" id="orderbtn">Order List</button>
					<button class="btn btn-success" id="comfirmorderbtn">Comfirm Order List</button>
			
                </div>
                <!-- /.card-header -->
					<div class="card-body" id="order">
					<table id="table" class="table table-bordered table-striped">
						<thead>
						<tr>

						
							<th>No</th>
							<th>User Name</th>
							<th>Address</th>
							<th>phone</th>
							<th>Voucherno</th>
							<th>Order Date</th>
							<th>Total</th>
							
							<th>Actions</th>
						</tr>
						</thead>
						<tbody>
						@php 
							$i = 1;
						@endphp
						
						@foreach($allorders as $order)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{$order->name}}</td>
							<td>{{$order->address}}</td>
							<td>{{$order->phone}}</td>
							<td>{{$order->voucherno}}</td>
							<td>{{$order->order_date}}</td>
							<td>{{$order->total}}</td>
							<td><a href="{{route('admin.order.show', $order->voucherno)}}" class="btn btn-secondary">Details</a>
							
							<form  style="display: inline;" action="{{route('orders.update',$order->id)}}" method="post" id="orderform" >
									@method('PATCH')
									@csrf
								
								
									<input type="submit" class="btn btn-success" value="Confirm" >
							</form>
							
							</td>
							
						</tr>
						@endforeach
		
						</tbody>
						<tfoot>
						<tr>
						<th>No</th>
							<th>User Name</th>
							<th>Address</th>
							<th>phone</th>
							<th>Voucherno</th>
							<th>Order Date</th>
							<th>Total</th>
							<th>Actions</th>
						</tr>
						</tfoot>
					</table>
					<div class="float-right">
					
					</div>
					</div>
				
				<div class="card-body" id="confirmorder">
                  <table id="table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
					
					
						<th>No</th>
						<th>User Name</th>
						<th>Address</th>
						<th>phone</th>
						<th>Voucherno</th>
						<th>Order Date</th>
						<th>Total</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
				
					@php 
						$i = 1;
					@endphp
					
					@foreach($comfirmorders as $order_confirm)
					<tr>
						<td>{{ $i++ }}</td>
						<td>{{$order_confirm->name}}</td>
						<td>{{$order_confirm->address}}</td>
						<td>{{$order_confirm->phone}}</td>
						<td>{{$order_confirm->voucherno}}</td>
						<td>{{$order_confirm->order_date}}</td>
						<td>{{$order_confirm->total}}</td>
						
						<td><button type="submit" class="btn btn-success">Confirmed Order </button></td>
						
					</tr>
					@endforeach
                    </tbody>
                    <tfoot>
                    <tr>
					<th>No</th>
						<th>User Name</th>
						<th>Address</th>
						<th>phone</th>
						<th>Voucherno</th>
						<th>Order Date</th>
						<th>Total</th>
						<th>Actions</th>
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

<script src="{{asset('frontend/lib/jquery/jquery.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#order').show();
		$('#confirmorder').hide();
		$('#orderbtn').click(function(){
			// alert('hh')
			$('#order').show();
			$('#confirmorder').hide();
		})
		$('#comfirmorderbtn').click(function(){
		
			$('#order').hide();
			$('#confirmorder').show();
		})
		

});

</script>