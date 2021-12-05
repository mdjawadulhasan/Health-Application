<style>
  <?php
  session_start();
  session_unset();
  session_destroy();
  ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Health Care System - Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />

  <link rel="icon" href="../Images/ticon.svg" type="image/icon type">
</head>

<body>
  <header class="header">
    <a href="#" class="logo">
      <i class="fas fa-laptop-medical"></i> Health Care System
    </a>

    <span class="logo2">
      <button onclick="Addcolor()"> <i class="fas fa-adjust"></i></button>
    </span>




  </header>

  <section class="home">
    <div class="img">
      <img src="../Images/home.svg" alt="">
    </div>

    <div class="elements">

      <h3>Eat Healthy,Keep Active</h3>
      <p>
        Do exercise regularly to keep yourself tight and strong. Regular
        check-up on your body. Never delay consulting to doctor when it's
        necessary.
      </p>

      <div class="btn">
        <a href="Patient/Patsignin.php" class="loginbtn">Continue as User <span class="fas fa-sign-in-alt"></span></a>

        <a href="Doctor/Dtsignin.php" class="loginbtn">Continue as Doctor <span class="fas fa-sign-in-alt"></span></a>
      </div>


    </div>
  </section>

  <div class="servicecontainer">
    <div class="services s1">
      <i class="far fa-calendar-check"></i>
      <br><br><br>
      <h1>Book an Appointment</h1>
      <br>
      <p>Find doctors with their department name and set an appointment</p>
    </div>
    <div class="services s2">
      <i class="fas fa-file-prescription"></i>
      <br><br><br>
      <h1>Online Prescription</h1>
      <br>
      <p> View All the digital prescriptions and keep them for a lifetime.</p>

    </div>
    <div class="services s3">
      <i class="fas fa-heart"></i>
      <br><br><br>
      <h1>Health Care</h1>
      <br>
      <p> Keep updated with all the personal data and keep them for a long time</p>
    </div>
    <div class="services s4">
      <i class="fas fa-user-nurse"></i>
      <br><br><br>
      <h1>Blood Donor</h1>
      <br>
      <p> See the nearby blood donors and contact with them.</p>
    </div>
  </div>



  <div class="covidinfocontainer">
    <div class="coimg">
      <img src="../Images/Covidimg.svg" alt="">
    </div>
    <div class="coninfo">
      <p>Know more About Covid-19 Outbreak !</p>
      <h2>Check real time covid data</h2>
      <br>
      <h2>Test covid-19 by providing your symptoms</h2>

    </div>
  </div>

  <div class="counter-up">
    <div class="content">
      <div class="box">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="counter">124 </div>
        <div class="text">Total Users</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-user-md"></i></div>
        <div class="counter">150</div>
        <div class="text">Doctors Available</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-user-check"></i></div>
        <div class="counter">100</div>
        <div class="text">Donors Available</div>
      </div>

    </div>
  </div>

  <div class="update">
    <p>Gets Every Single Health Updates Here</p>
    <h1>This system Always observing your health data and notify you whenever necessary</h1>
  </div>

  <div class="contact-wrap">
    <div class="contact-in">
      <h1>Contact Info</h1>
      <h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
      <p>+880 12121921</p>
      <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
      <p>hcs@gmail.com</p>
      <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
      <p>Kuril,Dhaka</p>
      <ul>
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
    </div>




    <div class="map">
      <div class="mapouter">
        <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=AIUB%20dhaka&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-org.net">123movies alternatives</a><br>
          <style>
            .mapouter {
              position: relative;
              text-align: right;
              height: 500px;
              width: 600px;
            }
          </style><a href="https://www.embedgooglemap.net"></a>
          <style>
            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              height: 500px;
              width: 600px;
            }
          </style>
        </div>
      </div>
    </div>
  </div>

  <div class="ftr">
    <p>© 2021 HCS. All Right Reserved</p>
  </div>

  <script>
    var count = 0;

    function Addcolor() {
      if (count % 2 == 0) {
        count++;
        document.querySelector(".home").style.backgroundColor = "#5b6361";
        document.querySelector("h3").style.color = "white";
        document.querySelector("p").style.color = "white";
      } else {
        count++;
        document.querySelector(".home").style.backgroundColor = "#fafafa";
        document.querySelector("h3").style.color = "black";
        document.querySelector("p").style.color = "#777";



      }

    }


    $(document).ready(function() {
      $(".counter").counterUp({
        delay: 10,
        time: 1200,
      });
    });
  </script>
</body>

</html>