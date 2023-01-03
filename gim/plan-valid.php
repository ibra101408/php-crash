<?php
include_once '../config/database.php';
include_once("./functions.php");

$user_data = check_login($conn);



//session_start();
$sql2 = mysqli_query($conn,"SELECT plan FROM users 
    WHERE user_id = '" . $user_data["user_id"] . "'");

$row = $sql2->fetch_assoc();

$expired_plan = array("plan" => "Your plan has been expired");
$ok_plan = array("plan" => "is valid till ");
$expire_date = array("date" => $row['plan']);


if($row['plan'] > date("Y-m-d")){
/*
    print_r($row['plan']);
    echo " ok ";*/

    $plan_validation = array_replace($row, $ok_plan, $expire_date);
} else{
/*
    print_r($row['plan']);
    echo " not ok ";*/

    $plan_validation = array_replace($row, $expired_plan);
}

 //echo date("Y-m-d");
/* while ($row = $sql2->fetch_assoc()) {
        //echo $row['plan']."<br>";
    }

mysqli_close($conn);
$cur_date = $sql1->fetch_assoc();
$sql1 = mysqli_query($conn,"SELECT CURDATE()");
*/
   // 

//
    //print_r($plan_validation);
    
    
    //$plan_validation = array_replace($row, $expired_plan);