<?php 
# database connection
$_SERVER="locahost";
$_USERNAME = "root";
$_PASSWORD = "mysql";
$_CONN = new mysqli($_SERVER,$_USERNAME,$_PASSWORD);
if($_CONN->connect_eroor){
    die("Connection failed : " . $_CONN->connect_error . "<br>");
}
else{
    echo "Connection Successfull<br>";
}

# database creation
$sql = "CREATE DATABASE VSPDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$_CONN->close();