<?php 
# database connection
$server ="localhost";
$username = "root";
$password = "";
$dbname = "gptcpbvr";
$_SESSION['regno'] = "";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

$regno = $_POST["regno"];
$userpassword = $_POST["password"];

$sql = "SELECT * FROM studentsdetails WHERE regno='$regno' AND studentpassword='$userpassword'";

if ($conn->query($sql)) {
    $_SESSION['regno'] = $regno; 
    echo '<script>alert("Login Successful")</script>';
    echo "<script>window.location.href='http://localhost/php/cycle3/home/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();