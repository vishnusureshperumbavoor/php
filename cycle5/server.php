<?php 
session_start();
$server ="localhost";
$username = "root";
$password = "";
$dbname = "gptcpbvr";

$conn = new mysqli($server, $username, $password, $dbname);

if(isset($_POST["student_registration"])){
    $studentname = $_POST["name"];
    $regno = $_POST["regno"];
    $studentpassword = $_POST["password"];
    $sql = "SELECT * FROM studentsdetails WHERE registerno=$regno";
    echo $conn->query($sql)->num_rows;
    if($conn->query($sql)->num_rows>0){
        echo '<script>alert("Registration error. Register number already exists.")</script>';
    }else{
        $sql = "INSERT INTO studentsdetails VALUES (NULL,'$studentname','$regno','$studentpassword')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION["regno"] = $regno;
            echo '<script>alert("Registration Successful")</script>';
            echo "<script>window.location.href='http://localhost/php/cycle3/home.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 
    }
}

if(isset($_POST["student_login"])){
    $regno = $_POST["regno"];
    $userpassword = $_POST["password"];
    $sql = "SELECT * FROM studentsdetails WHERE registerno='$regno' AND userpassword='$userpassword'";
    if ($conn->query($sql)->num_rows > 0) {
        $_SESSION["regno"] = $regno;
        echo "<script>window.location.href='http://localhost/php/cycle3/home.php'</script>";
    } else {
    echo "<script>alert('Login unsuccessful try again')</script>";
    }
}

$conn->close();