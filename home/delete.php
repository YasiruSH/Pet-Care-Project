<?php
    include_once "dbcon.php";

    if(isset($_GET['id'])){
        $nic = $_GET['id'];
        $query = mysqli_query($con,
            "DELETE FROM booking WHERE nic='$nic'"
        );

        if($query){
            header("location: users.php");
        }
    }
    else if(isset($_GET['cancel'])){
        $nic = $_GET['cancel'];
        $query = mysqli_query($con, "DELETE FROM booking WHERE bookingid='$nic'");

        if($query){
            header("location: account.php");
        }
        
    }
    else if(isset($_GET['cancelother'])){
        $nic = $_GET['cancelother'];
        $query = mysqli_query($con, "DELETE FROM bookingother WHERE bookingid='$nic'");

        if($query){
            header("location: account.php");
        }
        
    }
    else if(isset($_GET['cancelgr'])){
        $nic = $_GET['cancelgr'];
        $query = mysqli_query($con, "DELETE FROM bookinggrooming WHERE bookingid='$nic'");

        if($query){
            header("location: account.php");
        }
        
    }
    else if(isset($_GET['canceltesting'])){
        $nic = $_GET['canceltesting'];
        $query = mysqli_query($con, "DELETE FROM bookingtesting WHERE bookingid='$nic'");

        if($query){
            header("location: account.php");
        }
        
    }
    else if(isset($_GET['cancelsp'])){
        $nic = $_GET['cancelsp'];
        $query = mysqli_query($con, "DELETE FROM bookingsp WHERE bookingid='$nic'");

        if($query){
            header("location: account.php");
        }
        
    }
    else if(isset($_GET['pet_id'])){
        $nic = $_GET['pet_id'];
        $query = mysqli_query($con, "DELETE FROM pets WHERE pet_id='$nic'");

        if($query){
            header("location: account.php");
        }
        
    }
   
   

   