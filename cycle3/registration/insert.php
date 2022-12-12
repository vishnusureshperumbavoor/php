<?php 
# database connection
$server ="localhost";
$username = "root";
$password = "";
$dbname = "gptcpbvr";
$_SESSION['regno'] = "";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//} 
//else{
//    echo "Connection successful<br>";
//}

$studentname = $_POST["name"];
$regno = $_POST["regno"];
$studentemail = $_POST["email"];
$studentphone = $_POST["phone"];
$studentpassword = $_POST["password"];

$sql = "INSERT INTO studentsdetails VALUES (NULL,'$studentname','$regno','$studentemail','$studentphone','$studentpassword')";
    
if ($conn->query($sql) === TRUE) {
    $_SESSION['regno'] = $regno;
    echo '<script>alert("Registration Successful")</script>';
    echo "<script>window.location.href='http://localhost/php/cycle3/login/'</script>";
    //echo "Successfully Inserted";
    //header("Location:http://localhost/php/cycle3/login/");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
$conn->close();