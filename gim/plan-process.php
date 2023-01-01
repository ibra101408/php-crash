<?php
include_once '../config/database.php';

session_start();

$plan = $_POST['plan'];
$sql = "UPDATE users SET plan = CURRENT_DATE + INTERVAL '$plan' day  WHERE user_id = '" . $_GET["user_id"] . "'";

if (mysqli_query($conn, $sql)) {
    echo "Record added successfully";
    // toDO return to plan page 
} else {
    echo "Error adding record: " . mysqli_error($conn);
     // toDo return to plan page 
}
mysqli_close($conn);




