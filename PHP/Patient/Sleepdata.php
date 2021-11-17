<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patsignin.php");
    exit();
}
$title = 'Sleep Record';
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
    <section class="sleephm" id="sleephm">

        <div class="image">
            <img src="../../Images/SleeP.svg" alt="">
        </div>
        <div class="Countercontent">
            <p>How Long did you sleep today?</p>
            <div class="counterbox">
                <span id="number">0</span> Hours
            </div>
            <div class="btns center">
                <button class="btnsubtract">-</button>
                <button class="btnadd">+</button>    
            </div>

        </div>
    </section>
</body>


<script type="text/javascript">
    addBtn = document.getElementsByClassName('btnadd')[0];
    subtractBtn = document.getElementsByClassName('btnsubtract')[0];
    number = document.getElementById('number');

    var counter=0;
    
    function check()
    {
        if(counter>5)
        {
            document.querySelector('.counterbox').style.color="#16a085";
            document.querySelector("img").src="../../Images/Slee2.svg";
            document.querySelector("img").style.height="500px";
            document.querySelector("img").style.width="500px";
        }
        else 
        {
            document.querySelector('.counterbox').style.color="tomato";
            document.querySelector("img").src="../../Images/Sleep.svg";
        }  
    }

    addBtn.addEventListener("click", function() {
        
        if(counter<24)
        {
            counter++;
        }
        check();
        number.innerHTML =counter;
    });
    subtractBtn.addEventListener("click", function() {
        
        if(counter!=0)
        {
            counter--;
        }
        check();
        number.innerHTML =counter;
    });
</script>