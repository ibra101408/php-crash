<?php 
    require '../../gym/inc/header.php';

    session_start();

    include("../../config/database.php");
    include("../functions.php");
    $user_data = check_login($conn);
?>

<h2>
    Watch my membership 
</h2>
        <!--check membership in plan.php?-->
    <h3> starts: <?php echo $user_data['subscription']; ?></h3>
    
<?php
 include '../../gym/inc/footer.php'; ?>