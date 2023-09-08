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
                                    <h4 class="page-title">Booking</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                      

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
                                                                <th>User Name</th>
                                                                
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th >Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,booking,services WHERE  booking.user = user.nic AND booking.time = availabletimes.id AND services.id = booking.serviceType   ");
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
                                                                         <td>'.$row['name'].'</td>
                                                                         
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td >'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?com='.$row['bookingid'].'"<button class="con">CONFIRM</button></a>
                                                                         
                                                                         <a href="delete.php?cancel='.$row['bookingid'].'"<button class="delete">REJECT</button></a>
                                                                         
                                                                         </td>
                                                                         
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
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
                                                                <th>User Name</th>
                                                                
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th >Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,bookingother,services WHERE  bookingother.user = user.nic AND bookingother.time = availabletimes.id AND services.id = bookingother.serviceType   ");
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
                                                                         <td>'.$row['name'].'</td>
                                                                       
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td >'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?comm='.$row['bookingid'].'"<button class="con">CONFIRM</button></a>
                                                                         
                                                                         <a href="delete.php?cancelother='.$row['bookingid'].'"<button class="delete">REJECT</button></a>
                                                                         
                                                                         </td>
                                                                         
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
                                                             }
                                                             
                                                     ?>  
                                                                     <a href="" class='action-icon'> <i class='fa fa-file'></i></a>
                                                          
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive <td class='table-action'><a href='delete.php?id=".$row['nic']."'class='action-icon'<i class='fa fa-file'></i></a>-->                     
                                            </div> <!-- end preview-->
                                            </div>
                                            
                                             </div> <!-- end preview-->
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
                                                                <th>User Name</th>
                                                               
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th >Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,bookinggrooming,services WHERE  bookinggrooming.user = user.nic AND bookinggrooming.time = availabletimes.id AND services.id = bookinggrooming.serviceType   ");
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
                                                                         <td>'.$row['name'].'</td>
                                                                        
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td >'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?comgr='.$row['bookingid'].'"<button class="con">CONFIRM</button></a>
                                                                         
                                                                         <a href="delete.php?cancelgr='.$row['bookingid'].'"<button class="delete">REJECT</button></a>
                                                                         
                                                                         </td>
                                                                         
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
                                                             }
                                                             
                                                     ?>  
                                                                     <a href="" class='action-icon'> <i class='fa fa-file'></i></a>
                                                          
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive <td class='table-action'><a href='delete.php?id=".$row['nic']."'class='action-icon'<i class='fa fa-file'></i></a>-->                     
                                            </div> <!-- end preview-->
                                            </div>
                                             </div> <!-- end preview-->
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
                                                                <th>User Name</th>
                                                                
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th >Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,bookingtesting,services WHERE  bookingtesting.user = user.nic AND bookingtesting.time = availabletimes.id AND services.id =bookingtesting.serviceType   ");
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
                                                                         <td>'.$row['name'].'</td>
                                                                        
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td >'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?comtesting='.$row['bookingid'].'"<button class="con">CONFIRM</button></a>
                                                                         
                                                                         <a href="delete.php?canceltesting='.$row['bookingid'].'"<button class="delete">REJECT</button></a>
                                                                         
                                                                         </td>
                                                                         
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
                                                             }
                                                             
                                                     ?>  
                                                                     <a href="" class='action-icon'> <i class='fa fa-file'></i></a>
                                                          
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive <td class='table-action'><a href='delete.php?id=".$row['nic']."'class='action-icon'<i class='fa fa-file'></i></a>-->                     
                                            </div> <!-- end preview-->
                                            </div>
                                             </div> <!-- end preview-->
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
                                                                <th>User Name</th>
                                                               
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th >Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,bookingsp,services WHERE  bookingsp.user = user.nic AND bookingsp.time = availabletimes.id AND services.id = bookingsp.serviceType   ");
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
                                                                         <td>'.$row['name'].'</td>
                                                                         
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td >'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?comsp='.$row['bookingid'].'"<button class="con">CONFIRM</button></a>
                                                                         
                                                                         <a href="delete.php?cancelsp='.$row['bookingid'].'"<button class="delete">REJECT</button></a>
                                                                         
                                                                         </td>
                                                                         
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
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