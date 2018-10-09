
<?php
//This will simply logout you from the logged in account and destroy the session.
//If you are using a button to logout include this line in the php file.
//<input type="button" value="Log Out" class="details" onClick="location.href='logout.php'">

    session_start();
    session_destroy();
    header("location:homepage.php");
//replace homepage.php with the page you want to redirect after logout     
?>    