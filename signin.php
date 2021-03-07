<!doctype html>

<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/aaa89ad41b.js"></script>

    <title>Hello, world!</title>
  </head>
  <?php 

session_start();
$email=$_POST["emailid"];
$_SESSION["email"] = "$email";
$password=$_POST["password"];
$_SESSION["password"] = "$password";


?>

  <body>
    
    <nav class="navbar1 navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item"><a class="navbar-brand" href="#">MAHIARA</a></li> 
                <li class="nav-item">
                <form class="d-flex">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <a href="#" class="btn1" aria-current="page">Sell on MAHIARA</a>
                  </form>
                </li>
             
              <li class="nav-item">
               
                <a class="nav-link" href="#" > <span class="fa fa-shopping-cart fa-lg"></span>Cart</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="fa fa-user-circle fa-lg"></span> Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
             
            </ul>
            
          </div>
        </div>
      </nav>
      <div class="container1"><ul style="list-style-type:none;"><li>WHAT'S NEW</li><li>SINGLES</li><li>JEWELRY SET</li><li>PRECIOUS</li><li>ACCESORIES</li><li>CUSTOMISED</li><li>OCCASION</li><li>EXPLORE ALL</li><li>TODAY'S DEAL</li></ul></div>
      <div class="header"><h1>PLEASE LOG IN </h1></div>
      <div class="container">
        <form class="form1" action="login.php" method="POST">
            
            
            <input type="text" name="uemailid" class="form-control-l cfi" placeholder="&#xf199; Business Email Id" style="font-family: FontAwesome, Arial; font-style: normal">
            
            <input type="text" name="upassword" class="form-control-l cfi" placeholder="&#xf023; Password*" style="font-family: FontAwesome, Arial; font-style: normal">
           
            <button class="btn2 btn-lg">LOG IN</button>
            </form>
        
      </div>
      <footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="row foot-row"> <form action="">
    <!--Grid row-->
    <div class="row d-flex justify-content-center">
      <!--Grid column-->
      <div class="col-auto">
        <p class="pt-2">
          <span class="fa fa-envelope fa-lg"></span>
          <strong>Sign up for our newsletter</strong>
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-5 col-12">
        <!-- Email input -->
        <div class="form-outline form-white mb-4">
          <input type="email" id="form5Example2" class="form-control
          " placeholder="Get special discount in your inbox" />
          
        </div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-auto">
        <!-- Submit button -->
        <button type="submit" class="btn3 mb-4">
          Send
        </button>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </form></div>
  <div class="foot-con p-4">
    <!--Grid row-->
    <div class="row col-lg-8">
      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">ABOUT</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">Home</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Contact us</a>
          </li>
          <li>
            <a href="#!" class="text-dark">About us</a>
          </li>
          <li>
            <a href="#!" class="text-dark">careers</a>
          </li>
          <li>
            <a href="#!" class="text-dark">FAQ's</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">HELP</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-dark">Track order</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Payments</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Shipping</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Cancellation</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Returns</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">POLICY</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">Return Policy</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Terms of Use</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Security</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Privacy</a>
          </li>
        </ul>
      </div>
      
      <div class="row col-lg-6 col-md-6 mb-4 mb-md-0 bord">
        <h5 class="text-uppercase">TOP CATEGORIES</h5>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">What's New</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Jewwelry</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Jewwelry Set</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Precious</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Today's Deal</a>
          </li>
        </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-dark">Accessories</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Customised</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Occasion</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Explore all</a>
            </li>
          </ul>
          
        </div>
        
      </div>
      
      <!--Grid column-->

      <!--Grid column-->
      
      <!--Grid column-->
    </div>
    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
      <h5 class="text-uppercase mb-0">CONTACT</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!" class="text-dark">OFFICE ADDRESS:</a>
        </li>
        <li>
          <a href="#!" class="text-dark">J2/49 DDA flats, Kalka ji</a>
        </li>
        <li>
          <a href="#!" class="text-dark">New Delhi 110019</a>
        </li>
        <li>
          <a href="#!" class="text-dark">OFFICE NUMBER</a>
        </li>
        <li>
          <a href="#!" class="text-dark">+91 91XX856XX/+91 9XX856XX</a>
        </li>
      </ul>
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->
  <div class="row foot-icon"><ul style="list-style-type:none;">
    <li><span class="fa fa-suitcase fa-lg"></span>sell on mahiara</li><li><span class="fa fa-star fa-lg"></span>Advertise</li><li><span class="fa fa-percent fa-lg"></span>Offers</li><li><span class="fa fa-question-circle fa-lg"></span>Help Center</li></ul></div>
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: black;">
    
    <a class="text-white" href="#">© 2007-2020Mahiara.com</a>
  </div>
  <!-- Copyright -->
</footer>
      <!-- Footer -->
  <!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>