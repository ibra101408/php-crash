<?php 
    require '../gym/inc/header.php';
   // require 'php/gym/inc/../gym/inc/header.php';

    session_start();

    include("../config/database.php");
    include("./functions.php");
    $user_data = check_login($conn);
?>
    <style>
       /* footer{
            bottom:0;
        }*/
    </style>
    <body>
        <div class="main_container">
            <h1 class="title"> Welcome to workout paradise</h1>
            <img class="workout_boy" src="../gym/assets/workout_boy.png" width="600px" alt="">
        </div>
        <br>
        <h3>Hello, <?php echo $user_data['user_name']; ?>
            <br>
            <a href="./plan.php">Update Your Plan</a>
        </h3>
        <p id="demo"></p>
       
        
        <div class="tabel_container">
            <label for="muscle-select">Choose a Muscle:</label>

            <span style="white-space: nowrap;" class="" id="shopperlanguage_fs">
                <select class="input" id="muscle_options" name="muscle">
                    <option selected=""  value="">--Please choose an option--</option>

                    <option value="abdominals" class="">Abdominals</option>
                    <option value="abductors" class="">Abductors</option>
                    <option value="adductors" class="">Adductors</option>
                    <option value="biceps" class="">Biceps</option>

                    <option value="calves" class="">Calves</option>
                    <option value="chest" class="">Chest</option>
                    <option value="forearms" class="">Forearms</option>
                    <option value="glutes" class="">Glutes</option>

                    <option value="hamstrings" class="">Hamstrings</option>
                    <option value="lats" class="">Lats</option>
                    <option value="lower_back" class="">Lower back</option>
                    <option value="middle_back" class="">Middle back</option>

                    <option value="neck" class="biceps">Neck</option>
                    <option value="quadriceps" class="">Quadriceps</option>
                    <option value="traps" class="biceps">Traps</option>
                    <option value="triceps" class="">Triceps</option>

                </select> 
            </span>
            <div class="top-lang clearfix">
                <div class="cat-select">
                    <a href="#" data-dropdown="#dropdown-2" class="dropdown-open"></a>  
                </div>
            </div>

            <table class="table1 table-striped" id="memberList">
                <!--<tr class="table_head">
                        <th class="table_name">Name</th>
                        <th class="table_type">Type</th>
                        <th class="table_muscle">Muscle</th>
                        <th class="table_equipment">Equipment</th>
                        <th class="table_difficulty">difficulty</th>
                        <th class="table_description">Description</th>
                    </tr>-->
                </table>
            </div>
            <p id="read_more">... Rtad More</p>
        <script src="scripts.js"></script>
<?php
 include '../gym/inc/footer.php'; ?>
</body>
 </html>