<?php
   include_once "dbcon.php";

   if(isset($_GET['cid'])){
       $cid = $_GET['cid'];
   
       $query = mysqli_query($con, "UPDATE boughtitems SET payment = 'COD' WHERE orderId='$cid'");
       if($query){
           header("location: account.php");
       }
   }
   
   if(isset($_GET['ciid'])){
    $ciid = $_GET['ciid'];

    $query = mysqli_query($con, "UPDATE boughtitems SET payment = 'PAYED' WHERE orderId='$ciid'");
    if($query){
        header("location: account.php");
    }
}

  

    