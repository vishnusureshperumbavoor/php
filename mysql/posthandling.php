<?php 
# database connection
$server ="locahost";
$username = "root";
$password = "mysql";
$dbname = "vspdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
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
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["userid"]. "\tName: " . $row["username"]. "\tPassword : " . $row["userpassword"]. "<br>";
    }
  } else {
    echo "0 results";
  }

$conn->close();