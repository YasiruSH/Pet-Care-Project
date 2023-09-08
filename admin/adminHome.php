<?php
    include_once "dbcon.php";
    $loop = 1;
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
                            <a href="#" class="side-nav-link">
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
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                  
                        
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Customers</h5>
                                                <?php
                     
                                                                    $query = "SELECT * FROM user,role WHERE role.type = 'cus' AND user.role = role.roleId";  
                                                                    $query_run = mysqli_query($con, $query);
                                                                    $row = mysqli_num_rows($query_run);
                                                                    echo '
                                                        
                                                                    
                                                               
                                                                    <h3 class="mt-3 mb-3">'.$row.'</h3>';
                                                                    
                                                                    ?>

                                                
                                                
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-cart-plus widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Orders</h5>
                                                <?php
                     
                                                    $query = "SELECT * FROM boughtitems";  
                                                    $query_run = mysqli_query($con, $query);
                                                    $row = mysqli_num_rows($query_run);
                                                    echo '
                                        
                                                    
                                                
                                                    <h3 class="mt-3 mb-3">'.$row.'</h3>';
                                                    
                                                    ?>

                                                
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                               
                                 
                                   
                                    
                                </div> <!-- end row -->

                            </div> <!-- end col -->
                            <div class="col-xl-7 col-lg-6">
                               

                            </div> <!-- end col -->
                           
                        </div>
                        
                        <!-- end row -->

                        <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title">Users</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="card">
                                        <div class="card-body">
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>NIC</th>
                                                                <th>Name</th>
                                                                <th>Gender</th>
                                                                <th>Email</th>
                                                                <th>Contact</th>
                                                                <th>Address</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                <?php
                                                        $loop = 1;
                                                            $query = mysqli_query($con, "SELECT * FROM user,role WHERE role.type = 'cus' AND user.role = role.roleId");
                                                            while($row = mysqli_fetch_assoc($query))
                                                            {
                                                                echo "<tr>
                                                                    <td>".$loop."</td>
                                                                    <td>".$row['nic']."</td>
                                                                    <td>".$row['name']."</td>
                                                                    <td>".$row['sex']."</td>
                                                                    <td>".$row['email']."</td>
                                                                    <td>".$row['contact']."</td>
                                                                    <td>".$row['address']."</td>
                                                                    <td class='table-action'><a href='delete.php?id=".$row['nic']."'<button class='delete'>REMOVE</button></a>
                                                                    
                                                                
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
                                            </div>
                                        </div>
                                    



                        </div>
                        <!-- container -->

                        </div>
                        <!-- content -->





                                                    

                                                </div>
                                                <!-- end row -->

                                            </div>
                                            <!-- container -->

                                        </div>
                                        <!-- content -->





                                            </div>
                                            <!-- container -->

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