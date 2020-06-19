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

<body>
 <!-- Main content -->
     
   
         <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Product Detail Page</h3>
				           <a href="{{route('admin.staff.create')}}"  class="btn btn-primary btn-circle btnadd" >Add Staff</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th>No.</th>
                      <th >Name</th>
                      <th >Address</th>
                      <th >phone</th>
                      <th >Email</th>
                      <th >Image</th>
                      <throw>Action</th>
                      <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                      @foreach($users as $user)
                        <tr>
                          <td>{{$user->id }}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->address}}</td>
                          <td>{{$user->phone}}</td>
                          <td>{{$user->email}}</td>
                          <td>
                          <img src="{{asset($user->image)}}" width="80" height="80">
                          </td>
                          <td>
                            <a href="{{route('admin.staff.edit', $user->id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i> &nbsp;Edit
                            </a>
                            <form style="display: inline;" action="{{route('admin.staff.destroy',$user->id)}}" method="post">
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
                        <th>No.</th>
                        <th >Name</th>
                        <th >Address</th>
                        <th >phone</th>
                        <th >Email</th>
                        <th >Image</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="btnadd">
                    
                    {{ $users->links() }}
                  <div>
               
                </div>
                <!-- /.card-body -->
              
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
         </section>
      
  <!-- ./wrapper -->
</body>
@endsection
