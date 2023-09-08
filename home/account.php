<?php
  include_once "database/connection.php";
  $name;
  session_start();
  $id = $_SESSION['uid'];

  $query = mysqli_query($con,"SELECT * FROM user WHERE nic='$id'");
  $row = mysqli_fetch_assoc($query);
  $name = $row['name'];
  
  if(isset($_POST['addpet'])){
     
   
    $pcatgory = $_POST['category'];
    $pbreed = $_POST['breed'];
    $pname = $_POST['p_name'];
    $page = $_POST['age'];
    $pgender = $_POST['gender'];
   
    

    $query = mysqli_query($con, "INSERT INTO pets(category,breed,p_name,age,gender,nic) VALUES('$pcatgory','$pbreed','$pname',$page,'$pgender','$id')");
  }
?>



<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:25:56 GMT -->
<head>
<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Petco</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="/../Pet/image/x-icon" href="/../Pet/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="/../Pet/css/bootstrap.min.css">
        <link rel="stylesheet" href="/../Pet/css/animate.min.css">
        <link rel="stylesheet" href="/../Pet/css/magnific-popup.css">
        <link rel="stylesheet" href="/../Pet/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="/../Pet/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/../Pet/css/nice-select.css">
        <link rel="stylesheet" href="/../Pet/css/flaticon.css">
        <link rel="stylesheet" href="/../Pet/css/odometer.css">
        <link rel="stylesheet" href="/../Pet/css/jquery-ui.css">
        <link rel="stylesheet" href="/../Pet/css/slick.css">
        <link rel="stylesheet" href="/../Pet/css/default.css">
        <link rel="stylesheet" href="/../Pet/css/style.css">
        <link rel="stylesheet" href="/../Pet/css/responsive.css">
       
  
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/../Pet/css/style2.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/../Pet/css/responsive2.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->



    <!-- Preloader -->
    <div id="preloader">
            <img src="/../Pet/img/preloader.gif" alt="">
        </div>
        <!-- Preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <header>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo"><a href="index.html"><img src="/../Pet/img/logo/logo.png" alt=""></a></div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li ><a href="home.php">Home</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li class="menu-item-has-children"><a href="shop.php">Shop</a></li>
                                            <li class="menu-item-has-children"><a href="blog.php">Blog</a></li>
                                            <li><a href="contact.php">Contacts</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                           
                                            <li><a href="account.php"><i class="fa fa-user-circle"></i></a></li>
                                            <li><a href="shop.php"><i class="fa fa-shopping-cart"></i></a></li>
                                          
                                                
                                            <li class="header-btn"><a href="/../Pet/" class="btn">Logout  <img src="/../Pet/img/icon/w_pawprint.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo"><a href="index.html"><img src="/../Pet/img/logo/logo.png" alt="" title=""></a>
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
                <div class="header-shape" data-background="/../Pet/img/bg/header_shape.png"></div>
            </div>
          
        </header>
        <!-- header-area-end -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    
    <br><br>

    
   
   

    <!-- WISHLIST AREA START -->
    <div class="liton__wishlist-area pb-70 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- PRODUCT TAB AREA START -->
                    <div class="ltn__product-tab-area">
                    
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ltn__tab-menu-list mb-50">
                                        <div class="nav">
                                            <a class="active show" data-toggle="tab" href="#liton_tab_1_1">Dashboard <i class="fas fa-home"></i></a>
                                           
                                            <a data-toggle="tab" href="#petD">Pet  Details <i class="fas fa-arrow-down"></i></a>
                                            <a data-toggle="tab" href="#booking">Booking <i class="fas fa-arrow-down"></i></a>
                                            <a data-toggle="tab" href="#buy">Buy Product <i class="fas fa-arrow-down"></i></a>
                                        
                                            <a href="home.php">Home <i class="fas fa-sign-out-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="liton_tab_1_1">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Hello <strong><?php echo $name; ?></strong> </p>
                                                <p>From your account dashboard you can view your pet details,booking details.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ad">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>The following addresses will be used on the checkout page by default.</p>
                                                <div class="ltn__form-box">
                                                    <form action="#">
                                                      
                                                        <fieldset>
                                                            <legend>Password change</legend>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>Current password (leave blank to leave unchanged):</label>
                                                                    <input type="password" name="ltn__name">
                                                                    <label>New password (leave blank to leave unchanged):</label>
                                                                    <input type="password" name="ltn__lastname">
                                                                    <label>Confirm new password:</label>
                                                                    <input type="password" name="ltn__lastname">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                       
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="buy">
                                        <div class="ltn__myaccount-tab-content-inner">
                                        <div class="card">
                                        <div class="card-body">
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                               <th>No.</th>
                                                               <th>ID</th>
                                                               
                                                                <th>Product</th>
                                                                <th>Quantity</th>
                                                                <th>Price</th>
                                                                <th>Total</th>
                                                                <th>Shipping </th>
                                                                <th >Payment</th>
                                                                <th>Method</th>
                                                              
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $loop = 1;
                                                        $query = mysqli_query($con, "SELECT * FROM  boughtitems, shop WHERE shop.pid = boughtitems.itemid AND boughtitems.nic = '$id' ");
                                                        while ($row = mysqli_fetch_assoc($query)) {
                                                            $totalPrice = $row['qty'] * $row['price']; // Calculate the total price for the row
                                                            echo "<tr>
                                                                <td>".$loop."</td>
                                                                <td>".$row['orderId']."</td>
                                                              
                                                                <td>".$row['pname']."</td>
                                                                <td>".$row['qty']."</td>
                                                                <td>".$row['price']."</td>
                                                                <td>".$totalPrice."</td>
                                                                <td>".$row['status']."</td>
                                                                <td>".$row['payment']."</td>
                                                                <td><a href='pay.php?proid=".$row['orderId']."'<button class='pay'>PAY</button></a>
                                                                
                                                                </td>
                                                                
                                                            </tr>";
                                                            ++$loop;
                                                        }
                                                        ?>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                            </div>
                                             </div> <!-- end preview-->
                                             
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="booking">
                                        <div class="ltn__myaccount-tab-content-inner">
                                        <div class="card">
                                        <div class="card-body">
                                        <h4 class="header-title">Vaccination Booking</h4>
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>B_ID</th>
                                                               
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,booking,services WHERE  booking.user = user.nic AND booking.time = availabletimes.id AND services.id = booking.serviceType AND user = $id  ");
                                                         if($query){
                                                             while($row = mysqli_fetch_assoc($query)){
                                                                 if($row['date'] ==  NULL){
                                                                     continue;
                                                                 }
                                                                 else{
                                                                 echo '
                                                                     <tr>
                                                                         <td>'.$loop.'</td>
                                                                      
                                                                         <td>'.$row['bookingid'].'</td>
                                                                       
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td>'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?cancel='.$row['bookingid'].'"<button class="delete">DELETE</button></a></td>
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
                                                             }
                                                             
                                                     ?>  
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->   
                                                        
                                            </div> <!-- end preview-->
                                            
                                            </div>
                                            
                                             </div> <!-- end preview-->
                                             <br>
                                             <div class="card">
                                        <div class="card-body">
                                        <h4 class="header-title">Other Medical Problems Booking</h4>
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>B_ID</th>
                                                               
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,bookingother,services WHERE  bookingother.user = user.nic AND bookingother.time = availabletimes.id AND services.id = bookingother.serviceType AND user = $id  ");
                                                         if($query){
                                                             while($row = mysqli_fetch_assoc($query)){
                                                                 if($row['date'] ==  NULL){
                                                                     continue;
                                                                 }
                                                                 else{
                                                                 echo '
                                                                     <tr>
                                                                         <td>'.$loop.'</td>
                                                                      
                                                                         <td>'.$row['bookingid'].'</td>
                                                                     
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td>'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?cancelother='.$row['bookingid'].'"<button class="delete">DELETE</button></a></td>
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
                                                             }
                                                             
                                                     ?>  
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->   
                                                        
                                            </div> <!-- end preview-->
                                            
                                            </div>
                                            
                                             </div> <!-- end preview-->
                                             <br>
                                             <div class="card">
                                        <div class="card-body">
                                        <h4 class="header-title">Grooming Booking</h4>
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>B_ID</th>
                                                               
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,bookinggrooming,services WHERE  bookinggrooming.user = user.nic AND bookinggrooming.time = availabletimes.id AND services.id = bookinggrooming.serviceType AND user = $id  ");
                                                         if($query){
                                                             while($row = mysqli_fetch_assoc($query)){
                                                                 if($row['date'] ==  NULL){
                                                                     continue;
                                                                 }
                                                                 else{
                                                                 echo '
                                                                     <tr>
                                                                         <td>'.$loop.'</td>
                                                                      
                                                                         <td>'.$row['bookingid'].'</td>
                                                                        
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td>'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?cancelgr='.$row['bookingid'].'"<button class="delete">DELETE</button></a></td>
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
                                                             }
                                                             
                                                     ?>  
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->   
                                                        
                                            </div> <!-- end preview-->
                                            
                                            </div>
                                            
                                             </div> <!-- end preview-->
                                             <br>
                                             <div class="card">
                                        <div class="card-body">
                                        <h4 class="header-title">Testing & Diagnosisg Booking</h4>
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>B_ID</th>
                                                               
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,bookingtesting,services WHERE  bookingtesting.user = user.nic AND bookingtesting.time = availabletimes.id AND services.id = bookingtesting.serviceType AND user = $id  ");
                                                         if($query){
                                                             while($row = mysqli_fetch_assoc($query)){
                                                                 if($row['date'] ==  NULL){
                                                                     continue;
                                                                 }
                                                                 else{
                                                                 echo '
                                                                     <tr>
                                                                         <td>'.$loop.'</td>
                                                                      
                                                                         <td>'.$row['bookingid'].'</td>
                                                                         
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td>'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?canceltesting='.$row['bookingid'].'"<button class="delete">DELETE</button></a></td>
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
                                                             }
                                                             
                                                     ?>  
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->   
                                                        
                                            </div> <!-- end preview-->
                                            
                                            </div>
                                            
                                             </div> <!-- end preview-->
                                             <br>
                                             <div class="card">
                                        <div class="card-body">
                                        <h4 class="header-title">Specialized Care Booking</h4>
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>B_ID</th>
                                                              
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,bookingsp,services WHERE  bookingsp.user = user.nic AND bookingsp.time = availabletimes.id AND services.id = bookingsp.serviceType AND user = $id  ");
                                                         if($query){
                                                             while($row = mysqli_fetch_assoc($query)){
                                                                 if($row['date'] ==  NULL){
                                                                     continue;
                                                                 }
                                                                 else{
                                                                 echo '
                                                                     <tr>
                                                                         <td>'.$loop.'</td>
                                                                      
                                                                         <td>'.$row['bookingid'].'</td>
                                                                       
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td>'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?cancelsp='.$row['bookingid'].'"<button class="delete">DELETE</button></a></td>
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
                                                             }
                                                             
                                                     ?>  
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->   
                                                        
                                            </div> <!-- end preview-->
                                            
                                            </div>
                                            
                                             </div> <!-- end preview-->
                                            </div>
                                            
                                        </div>
                                        
                                        
                                        <div class="tab-pane fade" id="petD">
                                            <div class="ltn__myaccount-tab-content-inner">
                                            <div class="card">
                                        <div class="card-body">
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Pet ID</th>
                                                                <th>Catagory</th>
                                                                <th>Breeds</th>
                                                                <th>Name</th>
                                                                <th>Age</th>
                                                                <th>Gender</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $loop = 1;
                                                            $query = mysqli_query($con, "SELECT * FROM pets WHERE nic='$id'");
                                                            while($row = mysqli_fetch_assoc($query))
                                                            {
                                                                echo "<tr>
                                                                    <td>".$loop."</td>
                                                                    <td>".$row['pet_id']."</td>
                                                                    <td>".$row['category']."</td>
                                                                    <td>".$row['breed']."</td>
                                                                    <td>".$row['p_name']."</td>
                                                                    <td>".$row['age']."</td>
                                                                    <td>".$row['gender']."</td>
                                                                    <td class='table-action'><a href='delete.php?pet_id=".$row['pet_id']."'<button class='delete'>REMOVE</button></a>
                                                                    
                                                                   
                                                                    </td>
                                                                    
                                                                    
                                                                </tr>";
                                                                ++$loop;
                                                            }
                                                        ?>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->  
                                                                   
                                            </div> <!-- end preview-->
                                            </div>
                                            
                                             </div> <!-- end preview-->
                                            </div>
                                            <div class="comment-reply-box">
                                <h5 class="title">Add Your Pet Details</h5>
                                <aside class="breeder-sidebar">
                                <div class="widget breeder-widget">
                                   
                                    <form action="#" class="sidebar-find-pets" method ="POST">
                                        
                                       
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-grp">
                                                    
                                                    <input type="text" placeholder="Pet Category" name="category" id="contact-petc"onkeyup="validatePetc()">
                                                    <span id ="petc-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-grp">
                                                    
                                                    <input type="text" placeholder="Breed" name="breed" id="contact-breed"onkeyup="validateBreed()">
                                                    <span id ="breed-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-grp">
                                                    
                                                    <input type="text" placeholder="Name" name="p_name" id="contact-pname"onkeyup="validatePname()">
                                                    <span id ="pname-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-grp">
                                                    
                                                    <input type="text" placeholder="Pet Age" name="age"id="contact-age"onkeyup="validateAge()">
                                                    <span id ="age-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-grp">
                                               
                                            <select name="gender" class="selected" name="gender">
                                            <option data-display>Gender
                                                <option value="female">Female</option>
                                                <option value="male">Male</option>    
                                            </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                       
                                       
                                       
                                        <button class="btn" name="addpet">Submit </button>
                                       
                                    </form>
                                </div>
                                
                            </aside>
                               
                            </div>
                        </div>
                                            </div>
                                        </div>
                                        
                                       
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT TAB AREA END -->
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->

    
</div>
<!-- Body main wrapper end -->
    
		<!-- JS here -->
        <script src="/../Pet/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="/../Pet/js/bootstrap.min.js"></script>
        <script src="/../Pet/js/isotope.pkgd.min.js"></script>
        <script src="/../Pet/js/imagesloaded.pkgd.min.js"></script>
        <script src="/../Pet/js/jquery.magnific-popup.min.js"></script>
        <script src="/../Pet/js/owl.carousel.min.js"></script>
        <script src="/../Pet/js/jquery.odometer.min.js"></script>
        <script src="/../Pet/js/jquery.nice-select.min.js"></script>
        <script src="/../Pet/js/jquery-ui.min.js"></script>
        <script src="/../Pet/js/jquery.appear.js"></script>
        <script src="/../Pet/js/slick.min.js"></script>
        <script src="/../Pet/js/wow.min.js"></script>
        <script src="/../Pet/js/plugins.js"></script>
        <script src="/../Pet/js/main.js"></script>
        <script src="/../Pet/js/script.js"></script>
    
    <!-- Main JS -->
    <script src="/../Pet/js/main2.js"></script>
  
</body>

<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:25:57 GMT -->
</html>

