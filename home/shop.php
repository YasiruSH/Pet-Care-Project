<?php
  include_once "database/connection.php";

  

  $account = 0;
  $noAccount = 0;
  $passwordNotMatch = 0;

  session_start();
  $nic = $_SESSION['uid'];
 
?>

<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from themebeyond.com/pre/petco-prev/petco-live/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 08:31:45 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Petco </title>
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
   
    </head>
    <body>

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

        <!-- header-area -->
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
                                            <li class="active menu-item-has-children"><a href="shop.php">Shop</a></li>
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


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="/../Pet/img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Shop</h2>
                                <nav aria-label="breadcrumb">
                                   
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

                

        </main>
        <!-- main-area-end -->
     

           
  <br><br>

         <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                     <?php
                                        $loop = 1;
                                        $query = mysqli_query($con, "SELECT * FROM user,shop WHERE user.nic = shop.nic AND quantity>0");
                                        if($query){
                                            while($row = mysqli_fetch_assoc($query)){
                                                $id = $row['pid'];
                                                echo '
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="data:image;base64,'.base64_encode($row['pimage']).'" alt="Image" ></a>
                                                <div class="product-badge">
                                                   
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                        
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick_view_modal" id="itemOpen" onClick="clicked('.$id.','.$nic.')">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                        
                                                <h2 class="product-title"><a href="">'.$row['pname'].'</a></h2>
                                                <div class="product-price">Rs.
                                                    <span>'.$row['price'].'</span>.00
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                            }
                            
                    ?>
                                    
                                  <!-- ltn__product-item  close -->
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                        
                       
                        
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->

        <!-- footer-start -->
        <?php include 'footer.php'; ?>
        <!-- footer-end -->
<!-- MODAL AREA START (Quick View Modal) -->
<div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                      <!-- ltn__product-item -->

                    <div class="modal-body">
                        
                    </div>';
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->




		<!-- JS here -->
        <script src="/../Pet/js/vendor/jquery-3.6.0.min.js"></script>

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
        <script src="/../Pet/js/plugins2.js"></script>
        <script src="/../Pet/js/main2.js"></script>



        <script>
        function clicked(id,nic){
            $.ajax({
                type: "POST",
                url: "getValue.php",
                data: {
                    itemid: id,
                    nic: nic
                },
                dataType: "text",
                success: function(response){
                    console.log(response);
                    $('.modal-body').html(response);
                }
            });
        }

       
        function itemBuy(id,nic,fnic){
            value = $('#qty').val();
            console.log(fnic);
            $.ajax({
                type: "POST",
                url: "getValue.php",
                data: {
                    idValue: id,
                    qty: value,
                    nic: nic,
                    fnic: fnic
                },
                dataType: "text",
                success: function(response){
                    alert(response);
                    window.location.replace("shop.php");
                }

            });
        }
        
      
    </script>
    </body>

<!-- Mirrored from themebeyond.com/pre/petco-prev/petco-live/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 08:31:56 GMT -->
</html>
