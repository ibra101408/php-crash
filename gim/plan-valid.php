<?php
include_once '../config/database.php';
include_once("./functions.php");

$user_data = check_login($conn);

//session_start();
$sql2 = mysqli_query($conn,"SELECT plan FROM users 
    WHERE user_id = '" . $user_data["user_id"] . "'");

$expired_plan = array("Your plan has expired");
$row = $sql2->fetch_assoc();
if($row < date("Y/m/d")){
    print_r($row);
    echo "its ok";
} else{
    $plan_validation = array_replace($row, $expired_plan);
    print_r($plan_validation);
}
//$plan_validation = array_replace($row, $expired_plan);
 echo date("Y/m/d");
/* while ($row = $sql2->fetch_assoc()) {
        //echo $row['plan']."<br>";
    }
  
if (mysqli_query($conn, $sql2)) {
    //echo "Record added successfully";
} else {
    //echo "Error adding record: " . mysqli_error($conn);
}
mysqli_close($conn);

*/


