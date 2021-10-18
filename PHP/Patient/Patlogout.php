<?php
if(session_status()>=0)
{
    session_start();
    session_unset();
    session_destroy();
 
    echo "Logout success";
    header("refresh: 1; url=patindex.php");

}

?>