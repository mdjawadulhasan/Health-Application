<?php


session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patsignin.php");
    exit();
}
$title = 'Heart Rate Data';
require_once './includes/header.php';
require_once './includes/sidebar.php';
$conn = mysqli_connect('localhost', 'root', '', 'phawa');

$defaultvalue = 60;
$user_name = $_SESSION["user_name"];
$Todaydt = date('Y-m-d');
$query = "SELECT *FROM heartratedatatbl where crnt_date='$Todaydt' and username='$user_name'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $defaultvalue = $row['heartrcount'];
}
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
    <section class="Heartratedata" id="Heartratedata">
    <!--  -->
        <div class="image">
        <img src="../../Images/heartrate.svg" alt="">
        </div>
        <div class="Countercontent">
            <p>What is Your Average Heart Rate today?</p>
            <div class="counterbox">
                <span id="number">

                    <?php
                    if (isset($_POST['Setted']))
                        echo $_POST['Count'];

                    else
                        echo $defaultvalue;
                    ?>
                </span> BPM
            </div>
            <div class="btns center">
                <button class="btnsubtract">-</button>
                <button class="btnadd">+</button>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input id="fnumber" type="hidden" name="Count" value="<?php
                                                                            if (isset($_POST['Setted']))
                                                                                echo $_POST['Count'];

                                                                            else
                                                                                echo $defaultvalue;
                                                                            ?>" required>
                    <input type="submit" value="SET" name="Setted" class="btnset">
                </form>


            </div>

        </div>
    </section>
    <div id="chart-container">
        <p class="chartext"><h2><center>Your Previous Data </center></h2></p>
        <canvas id="mycanvas"></canvas>
    </div>

    <!-- javascript -->
    <script type="text/javascript" src="Js/jquery.min.js"></script>
    <script type="text/javascript" src="Js/Chart.min.js"></script>
    <script type="text/javascript" src="Js/BPM.js"></script>

    

</body>

<?php


if (isset($_POST["Setted"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $count = 0;

        $countval = $_POST['Count'];
        $user_name = $_SESSION["user_name"];
        


        $query = "SELECT *FROM heartratedatatbl where crnt_date='$Todaydt' and username='$user_name'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $sql = "";



        if ($count >= 1) {
            $sql = "UPDATE heartratedatatbl SET heartrcount=' $countval' where crnt_date='$Todaydt' and username='$user_name'";
        } else {
            $sql = "INSERT INTO heartratedatatbl(heartratedataid,username,crnt_date,heartrcount) VALUES ('0','$user_name',' $Todaydt','$countval')";
        }

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
        } else {
            echo '<script>alert("Try Again")</script>';
        }
    }
}

?>

