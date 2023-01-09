<?php
  // Connect to the MySQL database
  $host = 'localhost';
  $user = 'username';
  $password = 'password';
  $dbname = 'database_name';
  $conn = mysqli_connect($host, $user, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Insert a new row into the users table
  $sql = "INSERT INTO users (name, email) VALUES ('John', 'john@example.com')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the connection
  mysqli_close($conn);
?>
