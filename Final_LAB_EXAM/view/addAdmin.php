<?php
    include_once('../controller/sessionCheck.php');
    //session_start();
?>

<html>
<head>
    <title>Add Admin</title>
</head>
<body>

    <a href="add_user.php"> Back </a> |
    <a href="../controller/logout.php"> logout </a>

    <form method="post" action="../controller/addAdminCheck.php">
        <h2><center>ADMIN</center></h2>
        <fieldset>
            <legend><b>Add New Admin</b></legend>
            Full Name : <input type="text" name="fullName" value=""> <br><br>
            Username :  <input type="text" name="username" value=""> <br><br>
            Email :     <input type="email" name="email" value=""> <br><br>
            Password :  <input type="password" name="password" value=""> <br><br>
            Confirm Password : <input type="password" name="confirmPassword" value=""> <br><br>

            Contact No. : <input type="text" name="contactNo" value=""> <br><br>

            <input type="submit" name="submit" value="Add">
            <input type="reset" name="reset" value="Reset"> <br><br>
        </fieldset>
    </form>
</body>
</html>