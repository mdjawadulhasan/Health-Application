<?php 
$title = 'Logout'; 
require_once './includes/header.php'; 
?>

<?php
if(session_status()>=0)
{
    session_start();
    session_unset();
    session_destroy();
    header("refresh: 0; url=Patsignin.php");

}

?>