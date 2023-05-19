
<?php require '../../gym/inc/header.php'; ?>


<?php
// Initialize the session
session_start();

    include("../../config/database.php");
    include("../functions.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $check_password = $_POST['check_password'];
        $email = $_POST['email'];
        
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            if($password == $check_password){

                //save to db
                $user_id = random_num(5);
                $query = "INSERT INTO users (user_id, user_name, email, password) VALUES ('$user_id', '$user_name', '$email','$password')";

                mysqli_query($conn, $query);

                header("Location: login.php");
                die;
            }else{
                echo 'Passwords not much';
            }
        }
        else{
            echo 'Please enter valid info';
        }

    }
?>
 
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
                <label>Confirm Password</label>
                <input type="password" name="check_password" class="form-control">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="emali" name="email" class="form-control">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>
            <input type="submit" id="button" value="Signup"><br><br>
            <div class="form-group">
                <a href ="login.php">Click to login<a>
            </div>
        </form>
</body>
</html>




<?php include '../../gym/inc/footer.php'; ?>