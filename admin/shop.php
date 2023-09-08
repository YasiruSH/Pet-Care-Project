<?php
  include_once "database/connection.php";

  session_start();
     $id = $_SESSION['uid'];
   

  $query = mysqli_query($con,"SELECT * FROM user WHERE nic='$id'");
  $row = mysqli_fetch_assoc($query);
  $name = $row['name'];

 if(isset($_POST['add'])){
    $pname = $_POST['pname'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $file = addslashes(file_get_contents($_FILES["pimage"]["tmp_name"]));
   

    $query = mysqli_query($con, "INSERT INTO shop(pname,category,quantity,price,pimage,nic) VALUES(' $pname','$category', '$quantity', $price,'$file','$id')");
 }
 
  
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Petco Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <link rel="shortcut icon" type="/../Pet/image/x-icon" href="/../Pet/img/favicon.png">
        <!-- App favicon -->
      

        <!-- third party css -->
        <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="" height="16">
                    </span>
                   
                </a>

           
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                      

                        <li class="side-nav-item">
                            <a href="adminHome.php" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                              
                                <span> Dashboards </span>
                            </a>
                           
                        </li>

                      

                        <li class="side-nav-item">
                            <a href="users.php" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Users </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="pet.php" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Pet Details</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="booking.php" class="side-nav-link">
                                <i class="uil-comments"></i>
                                <span> Booking </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="shop.php" class="side-nav-link">
                                <i class="uil-comments"></i>
                                <span> Shop </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="complaints.php" class="side-nav-link">
                                <i class="uil-comments"></i>
                                <span> Complaints </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="/../Pet/" class="side-nav-link">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout </span>
                            </a>
                        </li>

                   
                   
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>
                       
                            

                       

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="/../Pet/img/favicon.png" alt="user-image" class="rounded-circle">
                                    </span>
                                    
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                

                          
                                    

                                    <!-- item-->
                                    <a href="/../Pet/" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        
                    </div>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                            </div>
                                           
                                           
                                        </form>
                                    </div>
                                    <h4 class="page-title">Shop Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="col-12">
                        <div class="card">
                            <!-- container -->
                    <div class="col-12">
                        <div class="card">
                                        <div class="card-body">
                                        <h4 class="header-title">Order Details</h4>
                                        <br>
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                        <tr>
                                                                <th>No.</th>
                                                                <th>Order ID</th>
                                                                <th>Product ID</th>
                                                                <th>Buyer Name</th>
                                                                <th>Quantity</th>
                                                                <th>Price</th>
                                                                <th>Total Price</th>
                                                                <th >Payment</th>
                                                                <th>Shipping Status</th>
                                                                <th >Action</th>
                                                                
                                                               
                                                              
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $loop = 1;
                                                        $query = mysqli_query($con, "SELECT * FROM user, boughtitems, shop WHERE user.nic = boughtitems.nic AND shop.pid = boughtitems.itemid");
                                                        while ($row = mysqli_fetch_assoc($query)) {
                                                            $totalPrice = $row['qty'] * $row['price']; // Calculate the total price for the row
                                                            echo "<tr>
                                                                <td>".$loop."</td>
                                                                <td>".$row['orderId']."</td>
                                                                <td>".$row['itemid']."</td>
                                                                <td>".$row['name']."</td>
                                                                <td>".$row['qty']."</td>
                                                                <td>".$row['price']."</td>
                                                                <td>".$totalPrice."</td>
                                                                <td>".$row['payment']."</td>
                                                                <td>".$row['status']."</td>
                                                                
                                                                <td><a href='delete.php?shippings=".$row['orderId']."'<button class='con'>SHIPPING</button></a>
                                                                <a href='delete.php?delivered=".$row['orderId']."'<button class='con'>DELIVERED</button></a>
                                                                </td>
                                                                
                                                            </tr>";
                                                            ++$loop;
                                                        }
                                                        ?>

                                                                     <a href="" class='action-icon'> <i class='fa fa-file'></i></a>
                                                          
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive <td class='table-action'><a href='delete.php?id=".$row['nic']."'class='action-icon'<i class='fa fa-file'></i></a>-->                     
                                            </div> <!-- end preview-->
                                            </div>
                                             </div> <!-- end preview-->
                     

                </div>
                <!-- content -->
                                        <div class="card-body">
                                        <h4 class="header-title">Product Details</h4>
                                        <br>
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                        <tr>
                                                                <th>No.</th>
                                                                <th>Product ID</th>
                                                                <th>Product Name</th>
                                                                <th>Catagory</th>
                                                                <th>Quantity</th>
                                                                <th>Price</th>
                                                               
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $loop = 1;
                                                            $query = mysqli_query($con, "SELECT * FROM shop ");
                                                            while($row = mysqli_fetch_assoc($query))
                                                            {
                                                                echo "<tr>
                                                                    <td>".$loop."</td>
                                                                    <td>".$row['pid']."</td>
                                                                    <td>".$row['pname']."</td>
                                                                    <td>".$row['category']."</td>
                                                                    <td>".$row['quantity']."</td>
                                                                    <td>".$row['price']."</td>
                                                                    
                                                                    <td class='table-action'><a href='delete.php?deletep=".$row['pid']."'<button class='delete'>REMOVE
                                                                    </button></a>
                                                                    <a href='edit.php?proid=".$row['pid']."'<button class='con'>EDIT</button></a>
                                                                    </td>
                                                                    
                                                                    
                                                                </tr>";
                                                                ++$loop;
                                                            }
                                                        ?>
                                                                     <a href="" class='action-icon'> <i class='fa fa-file'></i></a>
                                                          
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive <td class='table-action'><a href='delete.php?id=".$row['nic']."'class='action-icon'<i class='fa fa-file'></i></a>-->                     
                                            </div> <!-- end preview-->
                                            </div>
                                             </div> <!-- end preview-->
                     

                </div>
                <!-- content -->
                
                
                
                
                


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add New Product</h4>
                                        <br>
    
                                      
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="form-row-preview">
                                                <form method="POST" enctype="multipart/form-data">
                                                    <div class="row g-2">
                                                        <div class="mb-3 col-md-6">
                                                            <label for="example-palaceholder" class="form-label">Product Name:</label>
                                                            <input type="text"  class="form-control" placeholder="Product Name:" name="pname">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="example-select" class="form-label">Select Category:</label>
                                                            <select class="form-select"  name="category">
                                                                <option>Select Category:</option>
                                                                <option value ="food">Food </option>
                                                                <option value ="other">Other</option>
                                                                <option value ="medicine">Medicine</option> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="mb-3 col-md-6">
                                                         <label for="example-palaceholder" class="form-label">Total Quantity:</label>
                                                         <input type="text"  class="form-control" placeholder="Total Quantity:"name="quantity">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                        
                                                            <label for="example-palaceholder" class="form-label">Price:</label>
                                                            <input type="text"  class="form-control" placeholder="Price:" name="price">
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="mb-3 col-md-6">
                                                        <label for="example-fileinput" class="form-label">Choose Image:</label>
                                                                <input type="file"  class="form-control" name="pimage" id="pimage">
                                                        </div>
                                                        
                                                    </div>
        
        
                                                   
        
                                                    <button  class="btn btn-primary" name="add">Save  &amp; Continue</button>
                                                </form>                      
                                            </div> <!-- end preview-->
                                        
                                           
                                               
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>




                    </div>
                    

                </div>
                <!-- content -->


                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - PECTCO
                            </div>
                            
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->
    </body>
</html>