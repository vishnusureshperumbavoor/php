<?php include('insert.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <form action="insert.php" method="post">
    <table>
      <tr>
        <th colspan="2">STUDENT REGISTRATION FORM</th>
      </tr>
      <tr>
        <td style="text-align: right">Name</td>
        <td><input type="text"name="name" required/></td>
      </tr>
      <tr>
        <td style="text-align: right">Register Number</td>
        <td><input type="number" name="regno" required/></td>
      </tr>
      <tr>
        <td style="text-align: right">Email</td>
        <td><input type="email" name="email" required /></td>
      </tr>
      <tr>
        <td style="text-align: right">Phone Number</td>
        <td><input type="tel" name="phone" required/></td>
      </tr>
      <tr>
        <td style="text-align: right">Password</td>
        <td><input type="password" name="password" required/></td>
      </tr>
      
      
      <tr>
        <td style="text-align: right"><input 
        type="submit" value="Submit"></td>
        <td><input type="reset" value="Reset"></td>
      </tr>
    </table>
    </form>
  </body>
</html>
