<?php 
session_start();
$server ="localhost";
$username = "root";
$password = "";
$dbname = "gptcpbvr";
//$_SESSION["regno"] = "";

$conn = new mysqli($server, $username, $password, $dbname);

//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//} 
//else{
//    echo "Connection successful<br>";
//}

if(isset($_POST["student_registration"])){
    $studentname = $_POST["name"];
    $regno = $_POST["regno"];
    // $studentemail = $_POST["email"];
    // $studentphone = $_POST["phone"];
    $studentpassword = $_POST["password"];
    $sql = "SELECT * FROM studentsdetails WHERE registerno=$regno";
    if($conn->query($sql)==TRUE){
        echo '<script>alert("Registration error. Register number already exists.")</script>';
    }else{
        $sql = "INSERT INTO studentsdetails VALUES (NULL,'$studentname','$regno','$studentpassword')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION["regno"] = $regno;
            echo '<script>alert("Registration Successful")</script>';
            echo "<script>window.location.href='http://localhost/php/cycle3/home.php'</script>";
        //header("Location:http://localhost/php/cycle3/login/");
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
        //echo '<script>alert("Login Successful")</script>';
        //header('location: home.php');
        echo "<script>window.location.href='http://localhost/php/cycle3/home.php'</script>";
    } else {
    //echo "<script>alert('Error: $sql $conn->error')</script>";
    echo "<script>alert('Login unsuccessful try again')</script>";
    }
}

$conn->close();