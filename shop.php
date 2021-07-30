<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/logo2.png" type="image/x-icon">

  <title>
    BUY NOW
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            <b><img src="images/logo1.png" height="200px" width="400px" alt="Image "></b>
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="images/logo2.png" height="20px" width="40px" alt="Image "></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php"><b>Home</b><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="login.php">
                <button style="font-size:20px; border-radius: 24px"><b>Buy Now</b><i class="fa fa-bitcoin" style="font-size:24px;color:red"></i></button>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.php">
                <b>Why Us</b>
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><b>Contact Us</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php"><b>Register</b></a>
            </li>
          </ul>
          <div class="user_option">
            <a href="logout.php" class="btn btn-danger ml-3">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                <b>Logout</b>
              </span>
            </a>
            <a href="">
              <i class="fa fa-bitcoin" style="font-size:24px;color:red" aria-hidden="true"></i>
            </a>
            
          </div>
        </div>
      </nav>
    </header>
<br>
<center>
    <button style="color: blue;border-radius: 24px">
      <b>
        <i class="fa fa-bitcoin" style="font-size:24px;color:red" aria-hidden="true"></i>
        <i class="fa fa-bitcoin" style="font-size:24px;color:blue" aria-hidden="true"></i>
        <i class="fa fa-bitcoin" style="font-size:24px;color:cyan" aria-hidden="true"></i>
  <?php
  echo "Today is " . date("d/m/Y") . "";echo " -" . date("l");
  date_default_timezone_set("Africa/Nairobi");
  echo " Time :"  .date("h:i:sa")
  ?>
        <i class="fa fa-bitcoin" style="font-size:24px;color:cyan" aria-hidden="true"></i>
        <i class="fa fa-bitcoin" style="font-size:24px;color:purple" aria-hidden="true"></i>
        <i class="fa fa-bitcoin" style="font-size:24px;color:red" aria-hidden="true"></i>
      </b>
    </button>
   </center>

<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site You can Now Shop with Us.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Logout</a>
    </p>
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products- Jaguar Trading Robots
        </h2>
      </div>
      This page shows you the available products right now , more products that are useful in trading are yet to come . The customers have already been given 11% discount . Our customers are encouraged to use the following methods of payments:<br><i>Skrill and Bitcoin</i><br> where::<br>
      <ul type="disc">
      <li>Skrill adress is:<b>contact.s41@gmail.com</b></li>
      <li>Bitcoin Address:<b>3Gt7Z6ykYig93Zi4EN8NtpSHtHu6CFZrsH</b></li>
      </ul>
      <p>After payment, its advisable to contact the seller through all provided contacts. After payment confirmation, a link will be sent to your email for you to download and use the Jaguar Trading Robot (JTR)</p>
     <span><b> NB:Always confirm payment address with the sellers before making any payment</b></span>
      
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
            <img src="images/product1.jpg" alt="Product 1" height="200px" width="200px">
              </div>
              <div class="detail-box">
                <h6>

            <a target="_blank" href="https://account.skrill.com/wallet/ng/dashboard/lite/send-money">

                    <img alt="Pay cash by Skrill" src="https://www.skrill.com/fileadmin/business/brand-center/Pay_Cash_by_Skrill__-_Logo.svg" width="100" height="60" />

            </a>
                <h6><span>JTR</span>
                </h6>
                <h6>
                  <span>
                    $300
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  <i class="fa fa-bitcoin" style="font-size:36px;color:cyan"></i>
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
                <img src="images/p.png" alt="coming soon >>>">
              </div>
              <div class="detail-box">
                <h6>
                  <a target="_blank" href="https://account.skrill.com/wallet/ng/dashboard/lite/send-money">

                    <img alt="Pay cash by Skrill" src="https://www.skrill.com/fileadmin/business/brand-center/Pay_Cash_by_Skrill__-_Logo.svg" width="150" height="63" />

                </h6>
               
                  <span>
                    $300
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                 <i class="fa fa-bitcoin" style="font-size:36px;color:red"></i>
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
                <img src="images/p.png" alt="Coming soon >>>">
              </div>
              <div class="detail-box">
                <h6>
                  <a target="_blank" href="https://account.skrill.com/wallet/ng/dashboard/lite/send-money">

                    <img alt="Pay cash by Skrill" src="https://www.skrill.com/fileadmin/business/brand-center/Pay_Cash_by_Skrill__-_Logo.svg" width="150" height="63" />
                </h6>
                  <span>
                    $110
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  <i class="fa fa-bitcoin" style="font-size:36px;color:blue"></i>
                </span>
              </div>
            </a>
          </div>
        </div>
        
      <div class="btn-box">
        <a href="logout.php" class="btn btn-danger ml-3">Logout</a>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- info section -->

 <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              ABOUT US
            </h6>
            <p>
              Jaguar Ea is a powerful robot that uses advanced features no other robot has. Over the last few days hundreds of people have received their copies. If you'd like to see what this robot can do we invite you to secure your copy before they're all gone.
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                Newsletter
              </h5>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              NEED HELP
            </h6>
            <p>
              Contact us through mail, call us , whasapp us we are available 24/7
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="#">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Nairobi, Kenya </span>
              </a>
              <a href="tel:+254706051009">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+254706051009</span>
              </a>
              <a href="mailto:contact.s41@yahoo.com">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>contact.s41@yahoo.com </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="#">Jaguar Ea</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  </section>

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
  
</body>

</html>