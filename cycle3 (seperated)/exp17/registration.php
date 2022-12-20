<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="server.php" method="post">
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
        <td style="text-align: right">Password</td>
        <td><input type="password" name="password" required/></td>
      </tr>
      <tr>
        <td style="text-align: right"><input 
        type="submit" value="Submit"></td>
        <td><input type="reset" value="Reset"></td>
      </tr>
      <tr >
      </tr>
    </table>
    </form>
  </body>
</html>