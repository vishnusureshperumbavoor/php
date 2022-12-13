<?php 
include('server.php');
if(!isset($_SESSION['regno'])){
    echo "<script>alert('You have to log in first')</script>";
    echo "<script>window.location.href='http://localhost/php/cycle3/exp19/login.php'</script>";
}
if(isset($_GET['logout'])){
    session_destroy();
    session_unset();
    echo "<script>window.location.href='http://localhost/php/cycle3/exp19/login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php
        $regno = $_SESSION['regno'];
        $sql = "SELECT * FROM studentsdetails WHERE registerno=$regno";
        $conn = new mysqli($server, $username, $password, $dbname);
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<p class='welcome'>Welcome $row[studentname]</p>";
                echo "<p class='welcome'>Register Number :  $row[registerno]</p>";
                echo "<p class='welcome'>Password : $row[password]</p>";
            }
        }
        $conn->close();
    ?>
    <br>
    <button id="logoutbutton"><a href="home.php?logout='1'" id="logout">Click here to Logout</a></button>
    </div>
</body>
</html>