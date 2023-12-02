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
            Full Name : <input type="text" name="fullName" value=""> <br><br>
            Username :  <input type="text" name="username" value=""> <br><br>
            Email :     <input type="email" name="email" value=""> <br><br>
            Password :  <input type="password" name="password" value=""> <br><br>
            Confirm Password : <input type="password" name="confirmPassword" value=""> <br><br>
    
            Contact No. : <input type="text" name="contactNo" value=""> <br><br>

            <input type="submit" name="submit" value="Sign Up">
            <input type="reset" name="reset" value="Reset"> <br><br>

            Already have an acccount? <a href="login.php">Login here.</a>
        </fieldset>
    </form>
</body>
</html>