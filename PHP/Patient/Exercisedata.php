<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patsignin.php");
    exit();
}
$title = 'Exercise Record';
require_once './includes/header.php';
require_once './includes/sidebar.php';
$conn = mysqli_connect('localhost', 'root', '', 'phawa');

$defaultvalue1 = 0;
$defaultvalue2 = 0;
$defaultvalue3 = 0;
$user_name = $_SESSION["user_name"];
$Todaydt = date('Y-m-d');
$query = "SELECT *FROM excdatatbl where crnt_date='$Todaydt' and username='$user_name'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {

    $defaultvalue1 = $row['inruncounter'];
    $defaultvalue2 = $row['outruncounter'];
    $defaultvalue3 = $row['cyclingcounter'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Exercisestyle.css">

</head>

<body>
    <div class="excontainer">

        <div class="ex inrun">
            <div class="eximage">
                <img src="../../Images/inrun.svg" alt="">
            </div>

        </div>

        <div class="ex outrun">
            <div class="eximage">
                <img src="../../Images/outrun.svg" alt="">
            </div>

        </div>

        <div class="ex cycle">
            <div class="eximage">
                <img src="../../Images/cycle.svg" alt="">
            </div>
        </div>



        <div class="Countercontent">
            <p>Indoor Run</p>
            <div class="counterbox">
                <span id="number1">

                    <?php
                    if (isset($_POST['Setted1']))
                        echo $_POST['Count1'];

                    else
                        echo $defaultvalue1;
                    ?>
                </span> KM
            </div>
            <div class="btns center">
                <button class="btnsubtract">-</button>
                <button class="btnadd">+</button>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input id="fnumber1" type="hidden" name="Count1" value="<?php
                                                                            if (isset($_POST['Setted1']))
                                                                                echo $_POST['Count1'];

                                                                            else
                                                                                echo $defaultvalue1;
                                                                            ?>" required>
                    <input type="submit" value="SET" name="Setted1" class="btnset">
                </form>


            </div>

        </div>



        <div class="Countercontent">
            <p>Outdoor Run</p>
            <div class="counterbox">
                <span id="number2">

                    <?php
                    if (isset($_POST['Setted2']))
                        echo $_POST['Count2'];

                    else
                        echo $defaultvalue2;
                    ?>
                </span> KM
            </div>
            <div class="btns center">
                <button class="btnsubtract">-</button>
                <button class="btnadd">+</button>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input id="fnumber2" type="hidden" name="Count2" value="<?php
                                                                            if (isset($_POST['Setted2']))
                                                                                echo $_POST['Count2'];

                                                                            else
                                                                                echo $defaultvalue2;
                                                                            ?>" required>
                    <input type="submit" value="SET" name="Setted2" class="btnset">
                </form>


            </div>

        </div>



        <div class="Countercontent">
            <p>Cycling</p>
            <div class="counterbox">
                <span id="number3">

                    <?php
                    if (isset($_POST['Setted3']))
                        echo $_POST['Count3'];

                    else
                        echo $defaultvalue3;
                    ?>
                </span> KM
            </div>
            <div class="btns center">
                <button class="btnsubtract">-</button>
                <button class="btnadd">+</button>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input id="fnumber3" type="hidden" name="Count3" value="<?php
                                                                            if (isset($_POST['Setted3']))
                                                                                echo $_POST['Count3'];

                                                                            else
                                                                                echo $defaultvalue3;
                                                                            ?>" required>
                    <input type="submit" value="SET" name="Setted3" class="btnset">
                </form>


            </div>

        </div>

    </div>

    <div id="chart-container">
        <p class="chartext"><h2><center>Your Previous Data </center></h2></p>
        <canvas id="mycanvas"></canvas>
    </div>
</body>
<script type="text/javascript" src="Js/jquery.min.js"></script>
<script type="text/javascript" src="Js/Chart.min.js"></script>
<script type="text/javascript" src="Js/Exercisedata.js"></script>

</html>



<?php

if (isset($_POST["Setted1"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $count = 0;


        $countval1 = $_POST['Count1'];
        $user_name = $_SESSION["user_name"];


        $query = "SELECT *FROM excdatatbl where crnt_date='$Todaydt' and username='$user_name'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $sql = "";



        if ($count >= 1) {
            $sql = "UPDATE excdatatbl SET inruncounter ='$countval1' where crnt_date='$Todaydt' and username='$user_name'";
        } else {
            $sql = "INSERT INTO excdatatbl(exedtaid,username,crnt_date,inruncounter,outruncounter,cyclingcounter) VALUES ('0','$user_name','$Todaydt','$countval1','0','0')";
        }

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
        } else {
            echo '<script>alert("Try Again")</script>';
        }
    }
}



if (isset($_POST["Setted2"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $count = 0;


        $countval2 = $_POST['Count2'];
        $user_name = $_SESSION["user_name"];


        $query = "SELECT *FROM excdatatbl where crnt_date='$Todaydt' and username='$user_name'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $sql = "";



        if ($count >= 1) {
            $sql = "UPDATE excdatatbl SET outruncounter ='$countval2' where crnt_date='$Todaydt' and username='$user_name'";
        } else {
            $sql = "INSERT INTO excdatatbl(exedtaid,username,crnt_date,inruncounter,outruncounter,cyclingcounter) VALUES ('0','$user_name','$Todaydt','0','$countval2','0')";
        }

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
        } else {
            echo '<script>alert("Try Again")</script>';
        }
    }
}




if (isset($_POST["Setted3"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $count = 0;


        $countval3 = $_POST['Count3'];
        $user_name = $_SESSION["user_name"];


        $query = "SELECT *FROM excdatatbl where crnt_date='$Todaydt' and username='$user_name'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $sql = "";



        if ($count >= 1) {
            $sql = "UPDATE excdatatbl SET cyclingcounter ='$countval3' where crnt_date='$Todaydt' and username='$user_name'";
        } else {
            $sql = "INSERT INTO excdatatbl(exedtaid,username,crnt_date,inruncounter,outruncounter,cyclingcounter) VALUES ('0','$user_name','$Todaydt','0','0','$countval1')";
        }

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
        } else {
            echo '<script>alert("Try Again")</script>';
        }
    }
}

?>