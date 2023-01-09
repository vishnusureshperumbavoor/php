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

  // Select all rows from the customers table
  $sql = "SELECT * FROM customers";
  $result = mysqli_query($conn, $sql);

  // If the query was successful, display the data in an HTML table
  if ($result) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Name</th><th>Email</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<tr>';
      echo '<td>' . $row['id'] . '</td>';
      echo '<td>' . $row['name'] . '</td>';
      echo '<td>' . $row['email'] . '</td>';
      echo '</tr>';
    }
    echo '</table>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the connection
  mysqli_close($conn);
?>
