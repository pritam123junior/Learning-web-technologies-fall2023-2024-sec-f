<?php
    //include_once('../controller/sessionCheck.php');
    //session_start();
?>

<html>
<head>
    <title>Admin Login</title>
</head>
<body>
        <form method="post" action="../controller/adminLoginCheck.php">
            <fieldset>
                <legend>Admin Login</legend>
                Username:   <input type="text" name="username" value="" /> <br>
                Password:   <input type="password" name="password" value="" /> <br> <hr>
                            <input type="submit" name="submit" value="Submit" /> 
                            <hr>
                If you are a Customer, <a href="login.php">Login here</a>.
            </fieldset>  
        </form>
</body>
</html>