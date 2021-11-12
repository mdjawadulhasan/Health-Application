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
  <link rel="stylesheet" href="style.css" />
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
        <a href="Patient/Patsignin.php" class="loginbtn">Continue as Patient <span class="fas fa-sign-in-alt"></span></a>

        <a href="Admin/Admin.php" class="loginbtn">Continue as Doctor <span class="fas fa-sign-in-alt"></span></a>
      </div>


    </div>
  </section>


  <script>
    var count = 0;

    function Addcolor() {
      if (count % 2 == 0) {
        count++;
        document.querySelector(".home").style.backgroundColor = "#5b6361";
        document.querySelector("h3").style.color="white";
        document.querySelector("p").style.color="white";
      } else {
        count++;
        document.querySelector(".home").style.backgroundColor = "white";
        document.querySelector("h3").style.color="black";
        document.querySelector("p").style.color="#777";
      }
      
    }
  </script>
</body>

</html>