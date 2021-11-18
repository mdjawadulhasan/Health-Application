<?php

use function PHPSTORM_META\type;

session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patsignin.php");
    exit();
}
$title = 'Sleep Record';
require_once './includes/header.php';
require_once './includes/sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        dcheck();
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Homestyle.css">
</head>

<body>
    <section class="sleephm" id="sleephm">

        <div class="image">
            <img src="../../Images/Slee2.svg" alt="">
        </div>
        <div class="Countercontent">
            <p>How Long did you sleep today?</p>
            <div class="counterbox">
                <span id="number">

                    <?php
                    if (isset($_POST['Setted']))
                        echo $_POST['Count'];

                    else
                        echo '0';
                    ?>
                </span> Hours
            </div>
            <div class="btns center">
                <button class="btnsubtract">-</button>
                <button class="btnadd">+</button>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input id="fnumber" type="hidden" name="Count" value="<?php
                                                                            if (isset($_POST['Setted']))
                                                                                echo $_POST['Count'];

                                                                            else
                                                                                echo '0';
                                                                            ?>" required>
                    <input type="submit" value="SET" name="Setted" class="btnset">
                </form>


            </div>

        </div>
    </section>
</body>


<script type="text/javascript">
    var counter2 = document.querySelector('#fnumber').value;
    if (counter2 > 5) {
        document.querySelector('.counterbox').style.color = "#16a085";
        // document.querySelector("img").src = "../../Images/Slee2.svg";
        // document.querySelector("img").style.height = "300px";
        // document.querySelector("img").style.width = "300px";
    } else {
        document.querySelector('.counterbox').style.color = "tomato";
        // document.querySelector("img").src = "../../Images/Sleep.svg";
    }



    addBtn = document.getElementsByClassName('btnadd')[0];
    subtractBtn = document.getElementsByClassName('btnsubtract')[0];
    setbtn = document.getElementsByClassName('btnset')[0];
    number = document.getElementById('number');

    var counter = document.querySelector('#fnumber').value;

    document.querySelector('#fnumber').value = counter;

    function check() {
        if (counter > 5) {
            document.querySelector('.counterbox').style.color = "#16a085";
            // document.querySelector("img").src = "../../Images/Slee2.svg";
            // document.querySelector("img").style.height = "500px";
            // document.querySelector("img").style.width = "500px";
        } else {
            document.querySelector('.counterbox').style.color = "tomato";
            // document.querySelector("img").src = "../../Images/Sleep.svg";
        }
    }




    addBtn.addEventListener("click", function() {

        if (counter < 24) {
            counter++;
        }
        check();
        number.innerHTML = counter;
        document.querySelector('#fnumber').value = counter;


    });
    subtractBtn.addEventListener("click", function() {

        if (counter != 0) {
            counter--;
        }
        check();
        number.innerHTML = counter;
        document.querySelector('#fnumber').value = counter;

    });
</script>


<?php


if (isset($_POST["Setted"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $count=0;

        $countval = $_POST['Count'];
        $user_name = $_SESSION["user_name"];
        $Todaydt = date('Y-m-d');
        $conn = mysqli_connect('localhost', 'root', '', 'phawa');


        $query = "SELECT *FROM sleepdatatbl where crnt_date='$Todaydt' and username='$user_name'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $sql="";
       


        if ($count >= 1) 
        {
            $sql = "UPDATE sleepdatatbl SET hrcounter=' $countval' where crnt_date='$Todaydt' and username='$user_name'";
        } 
        else {
            $sql = "INSERT INTO sleepdatatbl(sleepdataid,username,crnt_date,hrcounter) VALUES ('0','$user_name',' $Todaydt','$countval')";
            
        }

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
        }
        else
        {
            echo '<script>alert("Try Again")</script>';
        }
    }
}




?>