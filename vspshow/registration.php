<?php include('server.php') ?>
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
      <!-- <tr>
        <td style="text-align: right">Email</td>
        <td><input type="email" name="email" required /></td>
      </tr>
      <tr>
        <td style="text-align: right">Phone Number</td>
        <td><input type="tel" name="phone" required/></td>
      </tr> -->
      <!-- <tr>
        <td style="text-align: right">Gender</td>
        <td>
          <input type="radio" name="gender" required/>Male <input type="radio" name="gender" />Female
          <input type="radio" name="gender" />Transgender
        </td>
      </tr>
      <tr>
        <td style="text-align: right">Profile Pic</td>
        <td><input type="file" name="file" required></td>
      </tr>
      
      <tr>
        <td style="text-align: right">Skill</td>
        <td>
          <input type="checkbox" name="skill" id="cv"/>Computer Vision <input type="checkbox" name="skill" id="web"/>Web
          Development <input type="checkbox" name="skill" id="mobile" />Mobile Development
        </td>
      </tr>
      <tr>
        <td>
            <label for="">Date of Birth</label>
        </td>
        <td>
            <select name="dob" id="" >
        <option value="">Date</option>
        <?php
        for($i=1;$i<=31;$i++){
            echo "<option>".$i."</option>";
        }
        ?>
      </select>
      <select name="dob" id="">
        <option value="">Month</option>
        <?php
        for($i=1;$i<=12;$i++){
            echo "<option>".$i."</option>";
        }
        ?>
      </select>
      <select name="dob" id="">
        <option value="">Year</option>
        <?php
        for($i=1999;$i<=2004;$i++){
            echo "<option>".$i."</option>";
        }
        ?>
      </select>
        </td>
      </tr> -->
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