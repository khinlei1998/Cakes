@extends('layouts.maintemplades')
@section('content_wrapper')
<style>
   .previewProfile{
        width: 175px;
        height: 175px;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }
</style>
<form action="{{route('admin.staff.update',$user->id)}}" method="post" enctype="multipart/form-data">

  @method('PATCH')
  @csrf
  <div class="row text-center">
      <div class="col-md-4"></div>
    
      <div class="col-md-4 imgholder">
           <label for="owner_image">
            <img src="{{$user->image}}"  class="previewProfile"
                                          alt="">
            <input type="hidden" name="oldimg" value="{{$user->image}}">
           </label>
            <input type="file" class="" onchange="previewFile()" name="image" id="owner_image"/>
      </div>

      <div class="col-md-4"></div>
  </div>

  <div class="row">
    <div class="col-md-6 ">
      <label>Name:</label>
      <input type="text" name="name" class="form-control" value="{{$user->name}}">
      @error('name')
        <div class="text-danger" style="">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6 ">
      <label>Address:</label>
      <input type="text" name="address" class="form-control" value="{{$user->address}}">
      @error('address')
        <div class="text-danger" style="">{{ $message }}</div>
        @enderror
    </div>
  </div>

  <div class="row">
   <div class="col-md-6 ">
    <label>phone:</label>
      <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
      @error('phone')
        <div class="text-danger" style="">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6 ">
      <label>Email:</label>
      <input type="email" name="email" class="form-control" value="{{$user->email}}">
      @error('email')
        <div class="text-danger" style="">{{ $message }}</div>
    @enderror
    </div>
  </div>

  <div class="row">
   <div class="col-md-6 ">
      <label>Password:</label>
      <input type="password" name="password" class="form-control">
     
    </div>

   <div class="col-md-6 ">
      <label>Confirm Password:</label>
      <input type="password" name="password_confirmation" class="form-control">
    </div>

    <input type="hidden" class="form-control" value="2" name="role_id">
  </div>

  <hr>

  <div class="text-center">
    <button type="submit" class="btn btn-success">Register</button>
  </div>
  

</form>
<script >
  function previewFile() {
        var preview = document.querySelector('.previewProfile'); //selects the query named img
        var file = document.querySelector('input[type=file]').files[0]; //sames as here
        var reader = new FileReader();
        reader.onloadend = function () {
            preview.src = reader.result;
        }
        if (file) {
            reader.readAsDataURL(file); //reads the data as a URL
        } else {
            preview.src = "";
        }
    }
</script>

@endsection