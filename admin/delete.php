<?php
    include_once "dbcon.php";

    if(isset($_GET['id'])){
        $nic = $_GET['id'];
        $query = mysqli_query($con,
            "DELETE FROM user WHERE nic='$nic'"
        );

        if($query){
            header("location: users.php");
        }
    }
    else if(isset($_GET['pet_id'])){
        $nic = $_GET['pet_id'];
        $query = mysqli_query($con, "DELETE FROM pets WHERE pet_id='$nic'");

        if($query){
            header("location: pet.php");
        }
        
    }
    else if(isset($_GET['deletep'])){
        $nic = $_GET['deletep'];
        $query = mysqli_query($con, "DELETE FROM shop WHERE pid='$nic'");

        if($query){
            header("location: shop.php");
        }
        
    }
    else if(isset($_GET['cancel'])){
        $nic = $_GET['cancel'];
        $query = mysqli_query($con, "DELETE FROM booking WHERE bookingid='$nic'");

        if($query){
            header("location: booking.php");
        }
        
    }
    else if(isset($_GET['cancelother'])){
        $nic = $_GET['cancelother'];
        $query = mysqli_query($con, "DELETE FROM bookingother WHERE bookingid='$nic'");

        if($query){
            header("location: booking.php");
        }
        
    }
    else if(isset($_GET['cancelgr'])){
        $nic = $_GET['cancelgr'];
        $query = mysqli_query($con, "DELETE FROM bookinggrooming WHERE bookingid='$nic'");

        if($query){
            header("location: booking.php");
        }
        
    }
    else if(isset($_GET['canceltesting'])){
        $nic = $_GET['canceltesting'];
        $query = mysqli_query($con, "DELETE FROM bookingtesting WHERE bookingid='$nic'");

        if($query){
            header("location: booking.php");
        }
        
    }
    else if(isset($_GET['cancelsp'])){
        $nic = $_GET['cancelsp'];
        $query = mysqli_query($con, "DELETE FROM bookingsp WHERE bookingid='$nic'");

        if($query){
            header("location: booking.php");
        }
        
    }
    else if(isset($_GET['com'])){
        $nic = $_GET['com'];
        $query = mysqli_query($con, "UPDATE booking SET status = 'confirmed' WHERE bookingid='$nic'");

        if($query){
            header("location: booking.php");
        }
        
    }
    else if(isset($_GET['comm'])){
        $nic = $_GET['comm'];
        $query = mysqli_query($con, "UPDATE bookingother SET status = 'confirmed' WHERE bookingid='$nic'");

        if($query){
            header("location: booking.php");
        }
        
    }
    else if(isset($_GET['comgr'])){
        $nic = $_GET['comgr'];
        $query = mysqli_query($con, "UPDATE bookinggrooming SET status = 'confirmed' WHERE bookingid='$nic'");

        if($query){
            header("location: booking.php");
        }
        
    }
    else if(isset($_GET['comtesting'])){
        $nic = $_GET['comtesting'];
        $query = mysqli_query($con, "UPDATE bookingtesting SET status = 'confirmed' WHERE bookingid='$nic'");

        if($query){
            header("location: booking.php");
        }
        
    }
    else if(isset($_GET['comsp'])){
        $nic = $_GET['comsp'];
        $query = mysqli_query($con, "UPDATE bookingsp SET status = 'confirmed' WHERE bookingid='$nic'");

        if($query){
            header("location: booking.php");
        }
        
    }
    else if(isset($_GET['shippings'])){
        $nic = $_GET['shippings'];
        $query = mysqli_query($con, "UPDATE boughtitems SET status = 'shipping start' WHERE orderId='$nic'");

        if($query){
            header("location: shop.php");
        }
        
    }
    else if(isset($_GET['delivered'])){
        $nic = $_GET['delivered'];
        $query = mysqli_query($con, "UPDATE boughtitems SET status = 'delivered' WHERE orderId='$nic'");

        if($query){
            header("location: shop.php");
        }
        
    }
    
  

    