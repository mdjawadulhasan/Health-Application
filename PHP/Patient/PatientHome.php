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
        <i class="fas fa-notes-medical"></i>
        <h3>free checkups</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        <a href="#" class="btngo"> learn more <span class="fas fa-chevron-right"></span> </a>
    </div>

    <div class="box b2">
        <i class="fas fa-ambulance"></i>
        <h3>24/7 ambulance</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        <a href="#" class="btngo"> learn more <span class="fas fa-chevron-right"></span> </a>
    </div>

    <div class="box">
        <i class="fas fa-user-md"></i>
        <h3>expert doctors</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        <a href="#" class="btngo"> learn more <span class="fas fa-chevron-right"></span> </a>
    </div>

    <div class="box">
        <i class="fas fa-pills"></i>
        <h3>medicines</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        <a href="#" class="btngo"> learn more <span class="fas fa-chevron-right"></span> </a>
    </div>

    <div class="box">
        <i class="fas fa-procedures"></i>
        <h3>bed facility</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        <a href="#" class="btngo"> learn more <span class="fas fa-chevron-right"></span> </a>
    </div>

    <div class="box">
        <i class="fas fa-heartbeat"></i>
        <h3>total care</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        <a href="#" class="btngo"> learn more <span class="fas fa-chevron-right"></span> </a>
    </div>

</div>
</section>
</body>

