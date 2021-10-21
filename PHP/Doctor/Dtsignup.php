<style>
<?php

   include "design.css";
?>
</style>

<?php
if(session_status()>=0)
{
    session_start();
    if(isset($_SESSION["user_name"]))
    {
        header("refresh: 0; url=Dtprofile.php");
    }
}

?>


<!DOCTYPE html>
<html>
<body>

<header id="main-header">
 <div class="container">
 <h1>Hello Doctor</h1>
 <h1>Welcome to Personal Health Application</h1>
 <h1>Give your information</h1>
</div>
</header>
<br>
    <form action="Dtsignupprocess.php" method="post" >

     <label for="Name"><b>Name :<b></label>
    <input type="text" name="name" value="" required><br><br>
       
       
        <label for="degree"><b>Degree :<b></label>
        <input type="text" name="degree" value="" required><br><br>

        <label for="Dept"><b>Department :<B></label>
        <input type="text" name="dept" value="" required><br><br>

        <label for="Chamber"><b>Chamber : <b></label>
        <input type="text" name="chamber" value="" required><br><br>

        <label for="Visiting Time"><b>Visiting Time : <b></label>
        <input type="text" name="vtime" value="" required><br><br>

        <label for="Visiting Days"><b>Visiting Days :<b> </label>
        <input type="text" name="vdays" value="" required><br><br>

        <label for="Phone No"><b>Phone No : <b></label>
        <input type="text" name="phnno" value="" required><br><br>


        <label for="user_name"><b>User name  : <b></label>
        <input type="text" name="user_name" value="" required><br><br>

        <label for="user_pass"><b>Password  :<b> </label>
        <input type="password" name="user_pass" value="" required><br><br>

        <label for="user_email"><b>E-mail :<b> </label>
        <input type="email" name="user_email" value="" required><br><br>

        <button type="submit" name="submit"  style="background-color:#04AA6D"><b>Register<b></button><br><br>

    </form>

</body>
</html>




