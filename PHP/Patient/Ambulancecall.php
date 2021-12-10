<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patsignin.php");
    exit();
}
$title = 'Amblance Call';

require_once './includes/header.php';
require_once './includes/sidebar.php';
?>

<section>
    <div class="amb">
       
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="539" height="420" id="gmap_canvas" src="https://maps.google.com/maps?q=Ambulance&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 395px;
                        width: 539px;
                    }
                </style><a href="https://www.embedgooglemap.net">google maps on my web site</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 395px;
                        width: 539px;
                    }
                </style>
            </div>
        </div>
        <div class="ambulanceimg">
            <img src="../../Images/amb.svg">
        </div>
    </div>
    <div class="bookamb">
        <h2>Provide Details</h2>
        <br>
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">Example label</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Another label</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <input type="submit" name="submit" value="book now" class="btnset">
        </form>
    </div>


</section>