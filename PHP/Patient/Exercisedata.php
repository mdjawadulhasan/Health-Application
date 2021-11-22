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

$defaultvalue = 0;
$user_name = $_SESSION["user_name"];
$Todaydt = date('Y-m-d');
$query = "SELECT *FROM weightdatatbl where crnt_date='$Todaydt' and username='$user_name'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $whtcounter = $row['whtcounter'];
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
                    if (isset($_POST['Setted']))
                        echo $_POST['Count'];

                    else
                        echo $defaultvalue;
                    ?>
                </span> KM
            </div>
            <div class="btns center">
                <button class="btnsubtract">-</button>
                <button class="btnadd">+</button>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input id="fnumber1" type="hidden" name="Count" value="<?php
                                                                            if (isset($_POST['Setted']))
                                                                                echo $_POST['Count'];

                                                                            else
                                                                                echo $defaultvalue;
                                                                            ?>" required>
                    <input type="submit" value="SET" name="Setted" class="btnset">
                </form>


            </div>

        </div>



        <div class="Countercontent">
            <p>Outdoor Run</p>
            <div class="counterbox">
                <span id="number2">

                    <?php
                    if (isset($_POST['Setted']))
                        echo $_POST['Count'];

                    else
                        echo $defaultvalue;
                    ?>
                </span> KM
            </div>
            <div class="btns center">
                <button class="btnsubtract">-</button>
                <button class="btnadd">+</button>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input id="fnumber2" type="hidden" name="Count" value="<?php
                                                                            if (isset($_POST['Setted']))
                                                                                echo $_POST['Count'];

                                                                            else
                                                                                echo $defaultvalue;
                                                                            ?>" required>
                    <input type="submit" value="SET" name="Setted" class="btnset">
                </form>


            </div>

        </div>



        <div class="Countercontent">
            <p>Cycling</p>
            <div class="counterbox">
                <span id="number3">

                    <?php
                    if (isset($_POST['Setted']))
                        echo $_POST['Count'];

                    else
                        echo $defaultvalue;
                    ?>
                </span> KM
            </div>
            <div class="btns center">
                <button class="btnsubtract">-</button>
                <button class="btnadd">+</button>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input id="fnumber3" type="hidden" name="Count" value="<?php
                                                                            if (isset($_POST['Setted']))
                                                                                echo $_POST['Count'];

                                                                            else
                                                                                echo $defaultvalue;
                                                                            ?>" required>
                    <input type="submit" value="SET" name="Setted" class="btnset">
                </form>


            </div>

        </div>

    </div>
</body>
<script type="text/javascript" src="Js/jquery.min.js"></script>
<script type="text/javascript" src="Js/Chart.min.js"></script>
<script type="text/javascript" src="Js/Exercisedata.js"></script>

</html>