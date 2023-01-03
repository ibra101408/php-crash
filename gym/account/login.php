
<?php require '../../feedback/inc/header.php'; ?>


<?php
// Initialize the session
session_start();

    include("../../config/database.php");
    include("../functions.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $date = $_POST['subscription'];
        $plan = $_POST['plan'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            
            //read from db
            $query = "SELECT * FROM users WHERE user_name = '$user_name' limit 1";

            $result = mysqli_query($conn, $query);
            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password){

                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: ../index.php");
                        die;
                    }
                }
            }            
            echo 'Check name && pass';
        }
        else{
            echo 'Check name && pass2';
        }
    }

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
        <form method="post">
            <div class="form-group">
                <label>name</label>
                <input type="text" name="user_name" class="form-control">
                <span class="invalid-feedback"><?php echo $name_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="emali" name="email" class="form-control">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>
            <input type="submit" id="button" value="Login">
            <div class="form-group">
                <a href ="signup.php">Click to signup<a>
            </div>
        </form>
</body>
</html>




<?php include '../../feedback/inc/footer.php'; ?>