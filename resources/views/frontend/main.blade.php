@extends('frontendtemplate')

@section('category')
<style>

</style>
<div class="col-md-3">
            <h6>Choose Category</h6>
           <ul class="list-group">
               @foreach($categories as $category)

              <li class="list-group-item">
                <a href="/?category_id={{$category->id}}"> {{$category->name}}</a></li>
              
               @endforeach
            </ul>
         

         <br>
            <h6>Choose shop</h6>
           <ul class="list-group">
               @foreach($shops as $shop)

              <li class="list-group-item">
                <a href="/?shop_id={{$shop->id}}"> {{$shop->name}}</a></li>
              
               @endforeach
      </div>       </ul>
          
@endsection

@section('product')
<div class="col-md-9">
              <div class="row portfolio-container">

                 @yield('content')
                 
                   @foreach($products as $product)

                    <div class="col-lg-4 col-md-4 portfolio-item filter-app wow fadeInUp">
                      <div class="portfolio-wrap">
                        <figure>
                          <img src="{{$product->image}}" width="100%" height="100%" class="img-fluid">
                          <button class="addcart btn btn-dark link-details" 
                            data-id="{{$product->id}}"
                            data-name="{{ $product->name }}"
                            data-price="{{ $product->price }}"
                            data-image="{{ $product->image }}"
                          >
                          Add To Cart</button>
                        </figure>

                        <div class="portfolio-info">
                          <h6><a href="#">{{ $product->name }}</a></h6>
                          <p>{{ $product->price}} MMK</p>
                        </div>
                      </div>
                    </div>

                    @endforeach
            </div>
@endsection
