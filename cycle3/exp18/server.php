<?php 
session_start();
$server ="localhost";
$username = "root";
$password = "mysql";
$dbname = "gptcpbvr";

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  else{
      echo "Connection successful<br>";
  }


if(isset($_POST["student_login"])){
    $regno = $_POST["regno"];
    $userpassword = $_POST["password"];
    $sql = "SELECT * FROM studentsdetails WHERE registerno='$regno' AND password='$userpassword'";
    echo $sql;
    if ($conn->query($sql)->num_rows > 0) {
        echo "<script>alert('Login succesfful')</script>";
    } else {
    echo "<script>alert('Login unsuccessful try again')</script>";
    }
}

$conn->close();