<?php 
    require '../feedback/inc/header.php';

    session_start();

    include("../config/database.php");
    include("./functions.php");
    $user_data = check_login($conn);
?>
   
    <body>

        <a href="account/logout.php">Logout</a>
        <h1> This is the index page</h1>
        <br>

        <h3>Hello, <?php echo $user_data['user_name']; ?>
        <br>
        <a href="./plan.php">Update Your Plan</a>
    </body>

<?php
 include '../feedback/inc/footer.php'; ?>