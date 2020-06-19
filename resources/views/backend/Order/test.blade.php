@extends('layouts.maintemplades')
@section('content_wrapper')

		<button class="btn btn-info" id="orderbtn">Order List</button>
		<button class="btn btn-info" id="comfirmorderbtn">Comfirm Order List</button>
		
		<div class="container-fluid" id="order">
			<table class="table table-striped mt-2">
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
						<td><a href="{{route('admin.order.show', $order->voucherno)}}" class="btn btn-info">Details</a></td>
						<td>
						<form  style="display: inline;" action="{{route('orders.update',$order->id)}}" method="post" >
								@method('PATCH')
								@csrf
								<!-- <input type="hidden" name="status" value="1"> -->

								<input type="submit" class="btn btn-success" value="Confirm" >
						</form>
						
						</td>
						
					</tr>
					@endforeach


				</tbody>
						
			</table>
		</div>

		<div class="container-fluid" id="confirmorder">
		
			<hr>
		
			<table class="table table-striped mt-2">
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
			</table>
		
		</div>


@endsection
<script src="{{asset('frontend/lib/jquery/jquery.min.js')}}"></script>
<!-- <scrpit src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script> -->
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
	// 	$( "#btnsubmit" ).click(function( e ) {
	// 		// bootbox.confirm("Are you sure?", function(){
  	// 		//   /* your callback code */ 
	// 		// })
	// 		bootbox.alert("Your message here…");
	// 	event.preventDefault();
		
		
	// });

});

</script>
