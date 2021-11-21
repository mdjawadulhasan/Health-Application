<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patsignin.php");
    exit();
}
$title = 'Home';
require_once './includes/header.php';
require_once './includes/sidebar.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Homestyle.css">
</head>

<body>
    <section class="services" id="services">

        <div class="box-container">
        
            <div class="box b1">
                <a href="Sleepdata.php" class="fas fa-bed"></a>
                <h3>Sleep</h3>
                <p>Update Your Regular Sleep Data.</p>

            </div>

            <div class="box b2">
                <a href="Heartratedata.php" class="fas fa-heartbeat"></a> 
                <h3>Average Heart Rate</h3>
                <p>Update Your Average Heart Rate.</p>

            </div>

            <div class="box">
                <a href="https://www.google.com/" class="fas fa-user-md"></a>
                <h3>expert doctors</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>

            </div>

            <div class="box">
                <a href="https://www.google.com/" class="fas fa-pills"></a>
                <h3>medicines</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>

            </div>

            <div class="box">
                <a href="https://www.google.com/" class="fas fa-procedures"></a>
                <h3>bed facility</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>

            </div>

            <div class="box">
                <a href="https://www.google.com/" class="fas fa-heartbeat"></a>
                <h3>Total care</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>

            </div>

        </div>
    </section>
</body>