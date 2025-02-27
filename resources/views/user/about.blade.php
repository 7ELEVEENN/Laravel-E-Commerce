<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>About Us | Book Strap</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


    <!-- Additional CSS Files -->
    <!-- Pogi ako -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

   <!-- Header -->
   <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><h2>Book <em>Strap</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{url('allbooks')}}">Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
            </li>

            <li class="nav-item">
            @if (Route::has('login'))
                  @auth

                  <li class="nav-item">
                    <a class="nav-link" href="{{url('showcart')}}">
                      <i class="fas fa-shopping-cart"></i>
                      Cart[{{$count}}]</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('showmyorder') }}">Orders</a>
                  </li>


                      <x-app-layout>

                      </x-app-layout>
                  @else
                      <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                      @if (Route::has('register'))
                          <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                      @endif
                  @endauth
          @endif

          </li>

          </ul>
        </div>
      </div>
    </nav>
   </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-content">
                <h4></h4>
                <br>
                <br>
                <h2>about us</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      <div class="best-features about-features">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Our Background</h2>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-image">
                <img src="assets/images/feature-image.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-content">
                <h4>About Us</h4>
                <p style="text-align: justify">At Book Strap, we are more than just an online bookstore; we are a passionate community of book enthusiasts committed to spreading the love of literature and the magic of reading. Our journey began with a simple idea: to create a virtual haven for bookworms and bibliophiles alike, where they can explore, discover, and purchase their favorite books from the comfort of their own homes.
                <h4>Our story</h4> 
                <p style="text-align: justify">Book Strap was founded by a group of avid readers who shared a common dream – to make the world of books easily accessible and enjoyable for everyone. We wanted to create a space where the written word could be celebrated, where stories could come to life, and where the wonders of reading could be shared with the world.
                </p>
                <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      
      <div class="team-members">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Our Team Members</h2>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="assets/images/qwe.jpg" alt="" height="348px" width="348px">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content" >
                  <!-- POGI SI VENN -->
                  <h4>Venn Delos Santos</h4>
                  <span>Member</span>
                  <p>BACHELOR OF SCIENCE IN COMPUTER SCIENCE</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="assets/images/ohjussan.jpg" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>Marc Christian Tumaneng</h4>
                  <span>Member</span>
                  <p>BACHELOR OF SCIENCE IN COMPUTER SCIENCE</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="assets/images/dzaddy.jpg" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>John Christian Gave</h4>
                  <span>Member</span>
                  <p>BACHELOR OF SCIENCE IN COMPUTER SCIENCE</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="assets/images/mekus.jpg" alt="" >
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>Roberto Bayos Jr.</h4>
                  <span>Member</span>
                  <p>BACHELOR OF SCIENCE IN COMPUTER SCIENCE</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="assets/images/dabs.jpeg" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>Johnben Augustus Nadal</h4>
                  <span>Member</span>
                  <p>BACHELOR OF SCIENCE IN COMPUTER SCIENCE</p>
                </div>
              </div>
            </div>
         
              </div>
            </div>
          </div>
        </div>
      </div>
  

  
  
      
  
      
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
   
              </div>
            </div>
          </div>
        </div>
      </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
   


  </body>

</html>
