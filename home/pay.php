<?php
  include_once "database/connection.php";

  $iid = $_GET['proid'];

  
  $query = mysqli_query($con, "SELECT * FROM boughtitems, shop WHERE orderId='$iid' AND shop.pid = boughtitems.itemid ");

  $row = mysqli_fetch_array($query);

  
  
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
<!-- WISHLIST AREA START -->
 <div class="ltn__checkout-area mb-105">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-6">
                    <div class="ltn__checkout-payment-method mt-50">
                        <h4 class="title-2">Payment Method</h4>
                        <div id="checkout_accordion_1">
                            
                            <div class="card">
                                <h5 class="ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-2" aria-expanded="true"> 
                                    Cash on delivery 
                                </h5>
                                <div id="faq-item-2-2" class="collapse show" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay with cash upon delivery.</p>
                                        
                                   
                                        <a class="btn theme-btn-1 btn-effect-1 text" href="<?php echo 'payment.php?cid=' . $iid; ?>">Please Confirm</a>




                                        
                                    </div>
                                </div>
                            </div>                          
                            <!-- card -->
                            <div class="card">
                                <h5 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-3" aria-expanded="false" >
                                    Pay Online <img src="/../Pet/img/payment-3.png" alt="#">
                                </h5>
                                <div id="faq-item-2-3" class="collapse" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                      
                                        <form id="contact-form" >
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-item input-item-name ">
                                                        <input type="text" name="name" placeholder="Enter your card name" id="contact-cname"onkeyup="validateCname()">
                                                        <span id ="cname-error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-item input-item-email ">
                                                        <input type="email" name="cardnumber" placeholder="Enter your card number" id="contact-cnumber"onkeyup="validateCnumber()">
                                                        <span id ="cnumber-error"></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-item input-item-email ">
                                                        <input type="email" name="ex" placeholder="Enter expiration date" id="contact-cdate"onkeyup="validateCdate()">
                                                        <span id ="cdate-error"></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="input-item input-item-phone ">
                                                        <input type="text" name="cvv" placeholder="Enter cvv number" id="contact-cvv"onkeyup="validateCvv()">
                                                        <span id ="cvv-error"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            
                                            <div class="btn-wrapper mt-0">
                                            <a class="btn theme-btn-1 btn-effect-1 text" href="<?php echo 'payment.php?ciid=' . $iid; ?>">Please Confirm</a>
                                            </div>
                                            <p class="form-messege mb-0 mt-20"></p>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping-cart-total mt-50">
                        <h4 class="title-2"></h4>
                        <table class="table">
                            <tbody>
                            <tr>
                                    <td>Order ID </td>
                                    <td><?php echo $row['orderId']; ?></td>
                                </tr>
                                <tr>
                                    <td>Item ID </td>
                                    <td><?php echo $row['itemid']; ?></td>
                                </tr>
                                <tr>
                                    <td>Item Name </td>
                                    <td><?php echo $row['pname']; ?></td>
                                </tr>
                                <tr>
                                    <td>Price </td>
                                    <td><?php echo $row['price']; ?></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td><?php echo $row['qty']; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><strong>Total</strong></td>
                                    <td><?php echo $row['qty'] * $row['price']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->

    
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
    <script src="/../Pet/js/plugins2.js"></script>
    
  
</body>

<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:25:57 GMT -->
</html>