<?php

    require_once('../model/loginModel.php');
    session_start();

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $email = $_REQUEST['email'];
    $fullName = $_REQUEST['fullName'];
    $contactNo = $_REQUEST['contactNo'];

    if (strlen($username) < 6) {
        echo "<h1>Username must be at least 6 characters long!</h1>";
        exit(); 
    }

    if (strlen($password) < 4) {
        echo "<h1>Password must be at least 4 characters long!</h1>";
        exit(); 
    }

    if ($password !== $confirmPassword) {
        echo "<h1>Password and Confirm Password do not match!</h1>";
        exit(); 
    }

    if ($username == "" || $password == "" || $email == "" || $fullName == "" || $contactNo == "") {
        echo "<h1>Null username or password or email or contact number!</h1>";
        exit(); 
    }

    $user = ['username' => $username, 'password' => $password, 'email' => $email, 'fullName' => $fullName, 'contactNo' => $contactNo];
    $status = registration($user);

    if ($status) {
        echo "You have signed up successfully";
        $_SESSION['flag'] = 'true';
    } else {
        echo "Invalid user!";
    }
?>

<html>
<body>
    <hr>
    <br>
    <h2> Click here to<a href="../view/login.php"> login </a> </h2>
</body>
</html>