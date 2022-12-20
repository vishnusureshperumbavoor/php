<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="registration.php" method="post">
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
        <td><input type="number" name="regno" required onclick="return validate()"/></td>
      </tr>
      <tr>
        <td style="text-align: right">Password</td>
        <td><input type="password" name="password" required/></td>
      </tr>
      <tr>
        <td style="text-align: right"><input 
        type="submit" value="Submit" name="student_registration" ></td>
        <td><input type="reset" value="Reset"></td>
      </tr>
      <tr >
        <td colspan="2"><p>Already having an account?
			<a href="login.php">Login Here!</a>
		</p></td>
      </tr>
    </table>
    </form>
  </body>
</html>