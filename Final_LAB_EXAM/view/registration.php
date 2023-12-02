<?php
    //include_once('../controller/sessionCheck.php');
    //session_start();
?>

<html>
<head>
    <title>Registration</title>
</head>
<body>
    <form method="post" action="../controller/registrationCheck.php">
        <fieldset>
            <legend>Signup</legend>
            Full Name : <input type="text" id="uemp_name" name="fullName" value=""> <br><br>
            Username :  <input type="text"  id="emp_name" "name="username" value=""> <br><br>
            Email :     <input type="email"  id="email"name="email" value=""> <br><br>
            Password :  <input type="password" id="emp_pass" name="password" value=""> <br><br>
            Confirm Password : <input type="password"id="cp" name="confirmPassword" value=""> <br><br>
    
            Contact No. : <input type="text" id="emp_cno" name="contactNo" value=""> <br><br>

            <input type="submit" name="submit" value="Sign Up" onclick="regcheckvalidation()">
            <input type="reset" name="reset" value="Reset"> <br><br>

            Already have an acccount? <a href="login.php">Login here.</a>
        </fieldset>
    </form>
</body>
</html>
