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

if(isset($_POST["student_registration"])){
    $studentname = $_POST["name"];
    $regno = $_POST["regno"];
    $studentpassword = $_POST["password"];
    $sql = "SELECT * FROM studentsdetails WHERE registerno=$regno";

    if($conn->query($sql)->num_rows>0){
        echo '<script>alert("Registration error. Register number already exists.")</script>';
    }else{
        $sql = "INSERT INTO studentsdetails VALUES (NULL,'$studentname','$regno','$studentpassword');";
        echo '<script>alert(tring to insert)</script>';
        if ($conn->query($sql)==TRUE) {
            echo '<script>alert("Registration Successful")</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 
    }
}

$conn->close();