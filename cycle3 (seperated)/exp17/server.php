<?php 
$server ="localhost";
$username = "root";
$password = "mysql";
$dbname = "gptcpbvr";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
      echo "Connection successful<br>";
}

$studentname = $_POST["name"];
$regno = $_POST["regno"];
$studentpassword = $_POST["password"];

$sql = "INSERT INTO studentsdetails VALUES (NULL,'$studentname','$regno','$studentpassword');";

if ($conn->query($sql)==TRUE) {
    echo '<script>alert("Registration Successful")</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 

$conn->close();