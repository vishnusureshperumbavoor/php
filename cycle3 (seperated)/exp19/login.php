<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="login.php" method="post">
    <table>
      <tr>
        <th colspan="2">STUDENT LOGIN FORM</th>
      </tr>
      <tr>
        <td style="text-align: right">Register Number</td>
        <td><input type="number" name="regno" required/></td>
      </tr>
      <tr>
        <td style="text-align: right">Password</td>
        <td><input type="password" name="password" required/></td>
      </tr>
      <tr>
        <td style="text-align: right"><input
        type="submit" value="Submit" name="student_login" ></td>
        <td><input type="reset" value="Reset"></td>
      </tr>
      <tr >
      </tr>
    </table>
    </form>
  </body>
</html>