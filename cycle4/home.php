<?php 
session_start();
if(!isset($_SESSION['regno'])){
    echo "<script>alert('You have to log in first')</script>";
    echo "<script>window.location.href='http://localhost/php/cycle4/login.php'</script>";
}
if(isset($_GET['logout'])){
    session_destroy();
    session_unset();
    echo "<script>window.location.href='http://localhost/php/cycle4/login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    
        echo $_SESSION['regno'];
    ?>
    <br>
    <button><a href="home.php?logout='1'" style="color:black;font-weight:bold;text-decoration:none;">Click here to Logout</a></button>
</body>
</html>