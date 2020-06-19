<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
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

  <style type="text/css">

    .notify-badge{
      position: absolute;
      right:-5px;
      top:0px;
      background:red;
      text-align: center;
      border-radius: 15px;
      color:white;
      padding:3px 3px;
      font-size:10px;
  }

  </style>
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
          <li class="menu-active"><a href="#intro">Home</a></li>
          
          <li><a href="#products">Product List</a></li>
          <li><a href="#contact">Contact</a></li>

          <li class="item">
            <a href="{{route('orders.index')}}">
              <span class="notify-badge"><p id="count"></p></span>
              <i class="fas fa-shopping-cart fa-2x"></i>
            </a>
          </li>
          
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
                <img src="{{asset('frontend/img/intro-carousel/3.jpg')}}"class="d-block w-100"> 
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

          

        <div class="row">

        
            @yield('category')
            @yield('product')

            </div>


            
          </div>
        </div>

     
 

      </div>
    </section><!-- #portfolio -->


    <!--==========================
      About Us Section
    ============================-->
   

    <!--==========================
      Services Section
    ============================-->
   
    <!--==========================
      Call To Action Section
   

==========================
      Team Section
    ============================-->
    

    <!--==========================
      Contact Section
    ============================-->
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
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Servicess</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
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


  <script type="text/javascript">

    $(document).ready(function(){
      showcount();
      $('.addcart').click(function(){

        var product_id = $(this).data('id');
        var product_name = $(this).data('name');
        var product_price = $(this).data('price');
        var product_image = $(this).data('image');

        var status = false;
        var product={
            id:product_id,
            product_name:product_name,
            product_price:product_price,
            product_image:product_image,
            quantity:1,
        };
        // console.log(product);
        var mycart=localStorage.getItem('productCart');

        if(!mycart){
            mycart='{"productlist":[]}';
        }

        var mycartobj=JSON.parse(mycart);
        // convert text to js obj   

        $.each(mycartobj.productlist,function(i,v)
        {
          if(v){
                if(v.id==product_id){
                    status=true;
                    v.quantity++;
                }
          }
         
        })
        
        if(!status){
            mycartobj.productlist.push(product);
            // arrayobj hwet
        }
        // console.log(mycartobj.productlist);
        localStorage.setItem('productCart',JSON.stringify(mycartobj));
        // obj to string

        showcount();
       
      })
     
      function showcount(){
        var mycart=localStorage.getItem('productCart');
  
        if (mycart){
          mycartobj=JSON.parse(mycart);
          var total=0;
          $.each(mycartobj.productlist,function(i,v){

            if(v){

              total+=parseInt(v.quantity);

            }

          });

          $("#count").html(total);
        }
      }
   
  
    })

  </script>
</body>
</html>
 





















