<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Cake Order System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('frontend/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

  <!-- ==s=====================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">C<small>AKE SHOP</small></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="/">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          
            @guest
           <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>


          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>


          </li>
          @else
                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
          @endguest
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

    <!-- carousel -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!-- <img src="{{asset('frontend/img/intro-carousel/3.jpg')}}"class="d-block w-100">  -->
                <img src="https://images.pexels.com/photos/4553118/pexels-photo-4553118.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"class="d-block w-100">

              </div>
              
              
            </div>
            
          </div>

  <!-- #intro -->

  <main id="main">

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="products"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Your Orders</h3>
        </header>

        <div class="row">

          <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Sub Total</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
          </table>
        </div>


            
          </div>
        </div>
        <div class="text-md-center">
         @if(Auth::check())
         <form action="" method="post" accept-charset="utf-8" id="checkout" class="forms">      
          <a href="#"  data-toggle='modal' class=" btn btn-block btn-success" id="checkout" >Check Out</a>
          
          @else
          <a href="{{route('login')}}"  data-toggle='modal' class=" btn btn-block btn-success">Check Out</a>
          @endif

        
           
    </section><!-- #portfolio -->


    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>BizPage</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
             Hlaing TownShip,Yangon <br>
             
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="{{asset('frontend/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('frontend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('frontend/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('frontend/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('frontend/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('frontend/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->

  <script src="{{asset('frontend/js/main.js')}}"></script>
  <script src="{{asset('frontend/lib/jquery/jquery.min.js')}}"></script>


  <!-- <script type="text/javascript">
    $(document).ready(function(){

      //alert('hi');
      $(".searchterm").on("click", function(event){
          //console.log('clicked');
          $('#all').hide();
          var id = $(this).data('id');
          $html = '';

          $.ajax({
            url: "result/"+id, 
            method: "GET",
            data:{id : id},
            success:function(data){
                console.log(JSON.parse(JSON.stringify(data))); 

                for(var i=0; i<data.length-1; i++){

                  $html += '<div class="portfolio-wrap">'+
                      '<figure>'+
                        '<img src="'+data[i].image+'" width="100%" height="100%" class="img-fluid">'+
                        '<a href="#" class="btn btn-dark link-details" data-title="App 1">Add To Cart</a>'+
                      '</figure>'+

                      '<div class="portfolio-info">'+
                        '<h4>'+data[i].name+'</h4>'+
                        '<p>'+data[i].price+'</p>'+
                      '</div></div>';
                }

                $('.searchresult').html($html);
                
            }  


        });

      });

    })
  </script> -->

  <script type="text/javascript">

    $(document).ready(function(){

        showtable();



        //Increase
          $("tbody").on('click','.btnincrease',

            function(){

              var id = $(this).data('id');

              var productlist = localStorage.getItem('productCart');

              var productJSON = JSON.parse(productlist);

              $.each(productJSON.productlist,function(i,v){


                if(v){

                  if(productJSON.productlist[i].id == id){
                    productJSON.productlist[i].quantity += 1; 
                  }
                  
                }

              });

              localStorage.setItem('productCart',JSON.stringify(productJSON));

              showtable();

            }

          );

        //Decrease
          $("tbody").on('click','.btndecrease',

            function(){
              
              var id = $(this).data('id');

              var productlist = localStorage.getItem('productCart');

              var productJSON = JSON.parse(productlist);

              if(productJSON.productlist[id].quantity>1){

                productJSON.productlist[id].quantity--;
                
              }else{
                product_array = productJSON.productlist;
                product_array.splice(id,1);

              }

              localStorage.setItem('productCart',JSON.stringify(productJSON));

              showtable();

            }

          );


        //Delete
          $("tbody").on('click','.btndelete',
            function(){

              var id = $(this).data('id');
              console.log(id);

              var productlist = localStorage.getItem('productCart');

              var productJSON = JSON.parse(productlist);

              var product_array = productJSON.productlist;

              product_array.splice(id,1);

              localStorage.setItem('productCart',JSON.stringify(productJSON));

              showtable();
            }
          );

      //Show Table
      function showtable(){
        var mycart=localStorage.getItem('productCart');
        if (mycart){

          var mycartobj=JSON.parse(mycart);
          var html=''; 
          var total=0; 
          var j=1;
       
          $.each(mycartobj.productlist,function(i,v){
            //console.log(i,v);
            if(v){
              var id=v.id;
              var name=v.product_name;
              var price=v.product_price;
              var image = v.product_image;
              var quantity=v.quantity;
              var subtotal=v.quantity*price;
            
              total+= parseInt(subtotal);

              html+='<tr>'+
                '<td>'+j+'</td>'+
                '<td><img src="'+image+'" width="50" height="auto"></td>'+

                '<td>'+name+'</td>'+
                '<td>'+price+'</td>'+
                '<td>'+
                  '<button data-id="'+i+'" class="btndecrease btn btn-outline-danger"><i class="fas fa-minus"></i></button>&nbsp;&nbsp;'+quantity+'&nbsp;&nbsp;'+
                  '<button data-id="'+id+'" class="btnincrease btn btn-outline-success"><i class="fas fa-plus"></i></button>'+
                '</td>'+

                '<td>'+subtotal+'</td>'+

                '<td><button  data-id="'+i+'" class="btndelete btn btn-danger"><i class="fas fa-times"></i></button>'+
                '</td>'+

              '</tr>';
              j++;
            }
          })



          html += '<tr><td colspan=5>Grant Total </td><td>'+total+'</td><td></td></tr>';

          $("tbody").html(html);
        }
      }

      


      $('#checkout').click(function(e){
     
         e.preventDefault();
         alert('Checkout Successfully');
      
      
         
          
          var mycart=localStorage.getItem('productCart');
            
          console.log(mycart);

          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

            $.ajax({
              url:'orders/savecart',
              type: 'post',
              dataType: 'json',
              data:{ arr : mycart, },
              success:function(response){
                Swal.fire({
                  title: 'Are you sure want to Order?',
                 
                  icon: 'success',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes,Checkout'
                }).then((result) => {
                  if (result.value) {
                    Swal.fire(
                      'Successfully checkout'
                    )
                  }
                })
                $( ".swal2-confirm" ).click(function() {
                  localStorage.clear();
                window.location.href="/";
 
            });
          
               
              }
           })
             
         })

    })
  </script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>
</html>
