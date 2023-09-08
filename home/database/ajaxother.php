<?php
    include_once("./connection.php");
    session_start();
    $id = $_SESSION['uid'];

    if(isset($_POST['getDates'])){
        $data = "<select name='name' id='time' class='selected'><option>Available Times</option>";
        $query = mysqli_query($con, "SELECT * FROM availabletimes");
        while($row = mysqli_fetch_assoc($query)){
            $data = $data . "<option value=".$row['id'].">".$row['bookingtime']."</option>";
        }
        $data = $data . "</select>";
        echo $data;
    }

    else if(isset($_POST['category'])){
        $category = $_POST['category'];
        $time = $_POST['time'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $type = $_POST['type'];
        
        if($type == "Other"){
            $query = mysqli_query($con, "INSERT INTO bookingother(category, age, date, time, serviceType, user) VALUES('".$category."', ".$age.", '".$date."', '".$time."', 'B', '".$id."')");
            echo "success";
        }
       
    }

    else if($_POST['changeDate']){
        $date = $_POST['date'];
        $timeSelection = "<select name='name' id='time' class='selected'><option>Available Times</option>";
        $awailable = array(1,2,3,4,5,6);
        $absolute;
        $usedDates = array();

        $query = mysqli_query($con, "SELECT * FROM bookingother WHERE date='".$date."' ");
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                $usedDates[] = $row['time'];
            }
            
            for($i = 0; $i < count($usedDates); $i++){
                if($index = array_search($usedDates[$i], $awailable)){
                    unset($awailable[$index]);
                    $absolute = array_values($awailable);
                }
                else{
                    continue;
                }
            }
            
            for($i = 0; $i < count($absolute); $i++){
                if($absolute[$i] == 1){
                    $timeSelection = $timeSelection . "<option value='1'>09.30.00</option>";
                }
                else if($absolute[$i] == 2){
                    $timeSelection = $timeSelection . "<option value='2'>10.30.00</option>";
                }
                else if($absolute[$i] == 3){
                    $timeSelection = $timeSelection . "<option value='3'>11.30.00</option>";
                }
                else if($absolute[$i] == 4){
                    $timeSelection = $timeSelection . "<option value='4'>12.30.00</option>";
                }
                else if($absolute[$i] == 5){
                    $timeSelection = $timeSelection . "<option value='5'>15.00.00</option>";
                }
                else{
                    $timeSelection = $timeSelection . "<option value='6'>16.00.00</option>";
                }
            }
            $timeSelection = $timeSelection . "</select>";

            echo $timeSelection;
        }
        else{
            $query = mysqli_query($con, "SELECT * FROM availabletimes");
            while($row = mysqli_fetch_assoc($query)){
                $timeSelection = $timeSelection . "<option value=".$row['id'].">".$row['bookingtime']."</option>";
            }
            $timeSelection = $timeSelection . "</select>";
            echo $timeSelection;
        }
    }

?>