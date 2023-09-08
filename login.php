
<?php
  include_once "database/connection.php";

  $account = 0;
  $noAccount = 0;
  $passwordNotMatch = 0;

 

    //  registration
    if(isset($_POST['CusReg'])){
    
        $nic = $_POST['nic'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $password = $_POST['password'];
    
        $query = mysqli_query($con, "SELECT * FROM user WHERE nic='$nic'");
        $rows = mysqli_num_rows($query);
    
        if($rows > 0){
          $account = 1;
        }
        else{
          $query = mysqli_query($con,
            "INSERT INTO user(nic,name,sex,email,contact,address,password,role) VALUE('$nic','$name','$sex','$email','$contact','$address','$password',1)"
          );
          header("location: home/home.php");
        }
      }

  // login
  else if(isset($_POST['login'])){
    $nic = $_POST['nic'];
    $password = $_POST['password'];

    $query = mysqli_query($con, 
      "SELECT * FROM user, role WHERE nic = '$nic' AND user.role = role.roleId"
    );
    $row = mysqli_fetch_assoc($query);
    $actPassword = $row['password'];
    $role = $row['type'];

    $rows = mysqli_num_rows($query);
    if($rows == 0){
      $noAccount = 1;
    }
    else{
      if($password != $actPassword){
        $passwordNotMatch = 1;
      }
      else{
        if($role == 'cus'){
          session_start();
          $_SESSION['uid'] = $nic;
          header("location: home/home.php");
        }
    
        else{
          session_start();
          $_SESSION['uid'] = $nic;
          header("location: admin/adminHome.php");
        }
      }
    }
  }
  
?>


<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from themebeyond.com/pre/petco-prev/petco-live/breeder-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 08:32:12 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Petco</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

        <!-- Preloader -->
        <div id="preloader">
            <img src="img/preloader.gif" alt="">
        </div>
        <!-- Preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            
        <header>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo"><a href="index.html"><img src="img/logo/logo.png" alt=""></a></div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class=" menu-item-has-children"><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li class="menu-item-has-children"><a href="shop.php">Shop</a></li>
                                            <li class="menu-item-has-children"><a href="blog.php">Blog</a></li>
                                            <li><a href="contact.php">Contacts</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                           
                                        <li><a href="login.php"><i class="fa fa-user-circle"></i></a></li>
                                            <li><a href="shop.php"><i class="fa fa-shopping-cart"></i></a></li>
                                          
                                                
                                            <li class="header-btn"><a href="login.php" class="btn">Sign In  <img src="img/icon/w_pawprint.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fa fa-sign-out"></i></div>
                                    <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                   
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
                <div class="header-shape" data-background="img/bg/header_shape.png"></div>
            </div>
          
        </header>
        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Sign In</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <section class="breeder-details-area">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-6">
                    <aside class="breeder-sidebar">
                                <div class="widget breeder-widget">
                                    <div class="breeder-widget-title mb-20">
                                        <h5 class="title">Sign In Your Account</h5>
                                    </div>
                                    <form method ="POST" class="sidebar-find-pets">
                                       
                                        <div class="form-grp">
                                           <i class="fa fa-user"></i>
                                            <input type="text" placeholder="NIC" name="nic" id="contact-nic"onkeyup="validateNic()">
                                            <span id ="nic-error"></span>
                                        </div>
                                        <div class="form-grp">
                                            <i class="fa fa-key"></i>
                                            <input type="password" placeholder="Password" name="password">
                                            
                                        </div>
                                      
                                      
                                           
                                       
                                       
                                        <button class="btn"name= login>SIGN IN</button>
                                    </form>
                                </div>
                                                            <?php
                                    if($account == 1){
                                        echo '<script>
                                        alert("Account Already Exists.");  
                                        </script>';
                                    }
                                    elseif($noAccount == 1){
                                        echo '<script>
                                        alert("Account not Found.");  
                                        </script>';
                                    }
                                    elseif($passwordNotMatch == 1){
                                        echo '<script>
                                        alert("Your Password does not Match.");  
                                        </script>';
                                    }

                                    ?>
                               
                            </aside>
                        </div>
                        <div class="col-lg-6">
                            <div class="breeder-details-content">
                                <h4 class="title">DON'T HAVE AN ACCOUNT?</h4>
                                
                               
                               
                                <p>Please create your accounnt here and get our services</p>
                                <br><br><br>
                                
                                    <a href="register.php" class="btn">Create Account<img src="img/icon/w_pawprint.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- breeder-details-area-end -->
           

          
        </main>
        <!-- main-area-end -->
<br><br><br>

        <!-- footer-start -->
        <?php include 'footer.php'; ?>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/script.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/pre/petco-prev/petco-live/breeder-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 08:32:15 GMT -->
</html>
