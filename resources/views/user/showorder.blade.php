<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Cart | Book Strap</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
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
                    <a class="nav-link" href="{{ url('showcart') }}">
                        <i class="fas fa-shopping-cart"></i> Cart
                        @if(isset($count) && $count >= 0)
                            [{{ $count }}]
                        @endif
                    </a>
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

    @if(session()->has('message'))
            
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}
            </div>  

            @endif

        
        
     <!-- partial -->
     <div class="container-fluid page-body-wrapper">
        <div class ="container" align ="center">
        @if(session()->has('message'))
        
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message')}}
        </div>  

        @endif
            <table>
                <tr style="background-color: #051831;">

                    <td style="padding: 20px; color: white;">Customer Name</td>
                    <td style="padding: 20px; color: white;">Phone</td>
                    <td style="padding: 20px; color: white;">Address</td>
                    <td style="padding: 20px; color: white;">Product Name</td>
                    <td style="padding: 20px; color: white;">Price</td>
                    <td style="padding: 20px; color: white;">Quantity</td>
                    <td style="padding: 20px; color: white;">Status</td>
                    <td style="padding: 20px; color: white;">Payment Status</td>
                    <td style="padding: 20px; color: white;">Action</td>


                </tr>

                @foreach($order as $order)

                <tr align="center">
                    <td style="padding:20px;">{{ $order->name }}</td>
                    <td style="padding:20px;">{{ $order->phone }}</td>
                    <td style="padding:20px;">{{ $order->address }}</td>
                    <td style="padding:20px;">{{ $order->product_name }}</td>
                    <td style="padding:20px;">{{ $order->price }}</td>
                    <td style="padding:20px;">{{ $order->quantity }}</td>
                    <td style="padding:20px;">{{ $order->status }}</td>
                    <td style="padding:20px;">{{ $order->payment_status }}</td>
                    <td style="padding:20px;">
                
                        @if($order->status == 'Order Placed')
                
                          <a onclick="return confirm('Confirm Order Cancellation?')" class="btn btn-danger" href="{{ url('cancel_order', $order->id) }}">Cancel Order</a>
                        @elseif($order->status == 'Delivered')
                          <p style="font-size: 17px;">Order Delivered</p>
                        @elseif($order->status == 'Order Shipped')
                          <p style="font-size: 17px;">On Delivery</p>

                        @else
                
                          <p style="font-size: 17px;">Order already cancelled</p>
                
                        @endif
                
                    </td>
                </tr>
                
                @endforeach
                
            </table>

        </div>
    </div>

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
