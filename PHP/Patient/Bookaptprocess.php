<?php
$title = 'Set Appointment';
require_once './includes/header.php';
require_once './includes/sidebar.php';
?>

<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patprofile.php");
    exit();
}

$dtid = $_GET['dtid'];
$conn = mysqli_connect('localhost', 'root', '', 'phawa');
$query = "SELECT * FROM doctortbl WHERE dtid='$dtid';";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $dtname = $row['dtname'];
    $degree = $row['dtdegree'];
    $dept = $row['dtdept'];
    $chamber = $row['dtchamber'];
    $vtime = $row['dtvisitingtime'];
    $vdays = $row['dtvisitingdays'];
    $phnno = $row['dtphone'];
    $user_email = $row['dtemail_id'];
    $Doctorid = $row['dtid'];
}
?>

<section class="AptDt">
    <div class="aptsetdiv">
        <div class="dtset">

            <div class="Dtprofile">
                <div class="dtimg">
                    <img src="../../Images/Dtuser.png" alt="Avatar" height="200px" width="170px"">
                </div>
                <div class=" dtcontainer">
                    <h4><b><?php echo $dtname ?></b></h4>
                    <p><?php echo   $degree ?></p>
                </div>
            </div>


            <div class="dtinfo">
                <div class="dtlabels">Chamber :</div>
                <div class="dtoutput"><?php echo $chamber ?></div>
                <div class="dtlabels">Visiting Time :</div>
                <div class="dtoutput"><?php echo  $vtime ?></div>
                <div class="dtlabels">Visiting Days :</div>
                <div class="dtoutput"><?php echo   $vdays ?></div>
                <div class="dtlabels">Phone No :</div>
                <div class="dtoutput"><?php echo  $phnno ?></div>
                <div class="dtlabels">Mail id :</div>
                <div class="dtoutput"><?php echo  $user_email ?></div>
            </div>


        </div>



        <form class="Aptconf" action="Confirmappointment.php" method="post">
            <input type="hidden" name="dtrname" value="<?php echo $dtname; ?>">
            <input type="hidden" name="dtrid" value="<?php echo $dtid; ?>">
            <label for="birthday">SET APPONTMENT DATE:</label>
            <input type="date" name="aptdate" required>
            <br>
            <button type="submit" name="submit" class="aptsetbtn">SET</button>

        </form>
    </div>
    <div class="aptimg"></div>

</section>
</body>

</html>