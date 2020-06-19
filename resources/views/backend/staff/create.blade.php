@extends('layouts.maintemplades')
@section('content_wrapper')

<form action="{{route('admin.staff.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="row text-center">
   		<div class="col-md-4"></div>
	            <div class="col-md-4 imgholder">
                     <label for="owner_image">  
                    <img src="https://via.placeholder.com/300.png?text=upload+profile"  class="previewProfile" alt="">
                     </label>
                    <input type="file" class="" onchange="previewFile()" name="image" id="owner_image"/>
                </div>
 	    </div>
         <div class="row">
            <div class="col-md-6  ">
                <label>Name</label>
                <input type="text" name="name" class="form-control"  >
            
                @error('name')
                <div class="text-danger" style="">{{ $message }}</div>
                @enderror
            </div>
   
           <div class="col-md-6">
                <label>Addreass</label>
            <input type="text" class="form-control" name="address">
            @error('address')
                <div class="text-danger" style="">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6  ">
                <label>phone:</label>
                <input type="text" name="phone" class="form-control" >
                @error('phone')
                <div class="text-danger" style="">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                    <label>Email:</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >
                @error('email')
                    <div class="text-danger" style="">{{ $message }}</div>
                @enderror   
            </div>
        </div>
        <div class="row">
            <div class="col-md-6  ">
                <label>Password:</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                @error('password')
                <div class="text-danger" style="">{{ $message }}</div>
                @enderror
                                    
            </div>
            <div class="col-md-6">
                <label for="password-confirm">Confirm Password:</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  >
                @error('password')
                <div class="text-danger" style="">{{ $message }}</div>
            @enderror
            </div>

            <input type="hidden" class="form-control" value="2" name="role_id">
        </div>
         <div class="mt-2 text-center">
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