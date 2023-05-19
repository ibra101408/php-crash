<?php 
    require '../gym/inc/header.php';

    session_start();

    include_once '../config/database.php';
    include_once("./functions.php");
    include_once("./plan-valid.php");
    $user_data = check_login($conn);
?>


<body>
    <h1 class="plan_title"> 
        <?php foreach($plan_validation as $key => $value)
            {
            echo $value;
            }
        ?>
    </h1> 
    <h3 class="choose_plan">
        Please, <?php echo $user_data['user_name']; ?>, choose Your plan  <!--  toDO: if plan is ok, make other string(fe. "wanna new plan?")  -->
    </h3>
    <form action="plan-process.php?user_id=<?php echo $user_data["user_id"]; ?>" method="post">

    <div class="price_table">
        <div class="package package_7days">
            <input class="control" id="control_01" type="radio" name="plan" value="7"/>
            <label class="card_label" for="control_01">
                <h3 class="plan_name">Trial package</h3>
                <h2 class="card_title">7 Days</h2>
                <div class="price"><div class="big">19</div>€/mo</div>
                <p>Sign up today for a free account and receive: </p>
                <ul>
                    <li>Free parking
                    <span class="material-symbols-outlined">
                        local_parking
                    </span>
                    </li>
                    <li>Shower
                        <span class="material-symbols-outlined">
                            shower
                        </span>
                    </li>
                </ul>
           </label>
        </div>
        <div class="package package_3mounts">
            <input class="control" id="control_02" type="radio" name="plan" value="90"/>
            <label class="card_label" for="control_02">
                <div class="banner">Most Popular</div>
                <h3 class="plan_name">Unsure</h3>
                <h2 class="card_title">3 Mounths</h2>
                <div class="price"><div class="big">17</div>€/mo</div>
                <p>Includes everything in our Trial package plus:</p>
                <ul>
                    <li>Sauna
                        <span class="material-symbols-outlined">
                            shower
                        </span>
                    </li>
                    <li>Candy
                        <span class="material-symbols-outlined">
                            cake
                        </span>
                    </li>
                </ul>
            </label>
        </div>
        <div class="package package_1year">
            <input class="control" id="control_03" type="radio" name="plan" value="365"/>
            <label class="card_label" for="control_03">
                <h3 class="plan_name">Hardworking</h3>
                <h2 class="card_title">1 Year</h2>
                <div class="price"><div class="big">14.99</div>€/mo</div>
                <p>Includes everything in our Unsure package plus:</p>
                <ul>
                    <li>Free drinks
                        <span class="material-symbols-outlined">
                            coffee
                        </span>
                    </li>
                    <li>McDonald's discounts
                        <span class="material-symbols-outlined">
                            fastfood
                        </span>
                    </li>
                </ul>
            </label>
        </div>
    </div>
    <div class="submit">
        <button class="button-56" type="submit" name="submit" value="Submit" disabled="disabled">Submit</button>
    </div>
    </form>
    <script src="scripts.js"></script>

<?php
 include '../gym/inc/footer.php'; 
 mysqli_close($conn);
?>
</body>
</html>