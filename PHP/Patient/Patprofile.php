<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patsignin.php");
    exit();
}
$title = 'Profile';
require_once './includes/header.php';
$user_name = $_SESSION["user_name"];
$query = "SELECT * FROM patienttbl WHERE ptusername='$user_name';";
$conn = mysqli_connect('localhost', 'root', '', 'phawa');
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $name = $row['ptname'];
    $phoneno = $row['ptphone'];
    $gender = $row['ptgender'];
    $age = $row['ptage'];
    $Bgrp = $row['ptbgrp'];
    $Email = $row['ptuseremail'];
}

require_once './includes/sidebar.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../Patient/css/profilestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>

<body>
    <div class="profile">
        <div class="usercard">
            <div class="imgcontainer">
                <img src="../../Images/placeholder.png" alt="Avatar" style="width:100%">
            </div>
            <div class="container">
                <h4><b><?php echo $name ?></b></h4>
            </div>
        </div>

        <div class="userinfo">
            <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-username">Name</label>
                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $name ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Email address</label>
                                <input type="email" id="input-email" class="form-control form-control-alternative" value="<?php echo $Email ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-first-name">User Name</label>
                                <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="<?php echo $user_name ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-last-name">Phone Number</label>
                                <input type="text" id="input-last-name" class="form-control form-control-alternative" value="<?php echo $phoneno ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <h6 class="heading-small text-muted mb-4">Personal Information</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-username">Age</label>
                                <input type="text" id="input-username" class="form-control form-control-alternative" value="<?php echo $age ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Gender</label>
                                <input type="email" id="input-email" class="form-control form-control-alternative" value="<?php echo $gender ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-first-name">Blood Group</label>
                                <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="<?php echo $Bgrp ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <br>
            <br>
            <button type="button" class="editbtn" onclick="location.href='Pateditprofile.php';">Edit Profile</button>
            
        </div>
    </div>

</body>