<?php

    require_once('../model/loginModel.php');
    session_start();
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $email = $_REQUEST['email'];
    $fullName = $_REQUEST['fullName'];
    $contactNo = $_REQUEST['contactNo'];

   
    if($username == "" || $password == "" || $email == "" || $fullName == "" || $contactNo == "")
    {
        echo "<h1> Null username or password or email or contact number! </h1>";
    }
    else
    {
        $user = ['username'=> $username, 'password'=> $password, 'email'=>$email, 'fullName'=> $fullName, 'contactNo'=> $contactNo];
        $status = addUser($user);
        
        if ($status)
        {
            echo "User have been created successfully";
            $_SESSION['flag'] = 'true';
        }
        else
        {
            echo "invalid user!";
        }
    }
?>

<html>
    <body>
        <hr>
        <h3>User can now login with username and password.</h3>
        <a href="../view/addUser.php"> Back </a> |
        <a href="../controller/logout.php"> logout </a>
    </body>
</html>

  