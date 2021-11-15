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