<?php 
# database connection
$server ="localhost";
$username = "root";
$password = "";
$dbname = "gptcpbvr";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

$regno = $_POST["regno"];
$userpassword = $_POST["password"];

$sql = "SELECT * FROM userdetails WHERE regno='$regno' AND password='$userpassword'";
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Login Successful")</script>';
    echo "<script>window.location.href='http://localhost/php/cycle3/login/'</script>";
} else {
    echo "0 results";
}

$conn->close();