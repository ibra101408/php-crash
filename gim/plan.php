<?php 
    require '../feedback/inc/header.php';

    session_start();

    include_once '../config/database.php';
    include_once("./functions.php");
    include_once("./plan-valid.php");
    $user_data = check_login($conn);
//php echo $user_data["plan"];
//$val = $plan_validation[['plan']['date']];
?>


<body>
    <h3>Current plan 
        <?php foreach($plan_validation as $key => $value)
            {
            echo $value;
            }
        ?>
    </h3>
    <h3>
        PLease, <?php echo $user_data['user_name']; ?>, choose Your plan :)
    </h3>
<form action="plan-process.php?user_id=<?php echo $user_data["user_id"]; ?>" method="post">

    <table>
        <tr>
            <td>3 mounths</td>
            <td><input type="radio" name="plan" value="7"/>7Update</td>
        </tr>
        <tr>
            <td>6 mounths</td>
            <td><input type="radio" name="plan" value="90"/>90Update</td>
        </tr>
        <tr>
            <td>1 year</td>
            <td><input type="radio" name="plan" value="365"/>1Update</td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Submit"/></td>
        </tr>  
    </table>
</form>
</body>


<?php
 include '../feedback/inc/footer.php'; 
 mysqli_close($conn);
?>