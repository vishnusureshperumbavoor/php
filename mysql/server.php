<?php 
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "vspdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
else{
    echo "Connection successful<br>";
}

$username = $_POST["name"];
$userpassword = $_POST["password"];

$sql = "INSERT INTO userdetails VALUES (NULL,'$username','$userpassword')";
    
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 

$sql = "SELECT * FROM userdetails";
$result = $conn->query($sql);
  
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. "\tName: " . $row["name"]. "\tPassword : " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();