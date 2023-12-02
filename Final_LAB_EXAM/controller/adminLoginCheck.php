<?php
    require_once('../model/loginModel.php');

    session_start();

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == "" )
    {
        echo "null username or password!";
    }
    else
    {
        $status = adminLogin($username, $password);
        
        if ($status)
        {
            $_SESSION['flag'] = 'true';
            header('location: ../view/adminHomePage.php');
        }
        else
        {
            echo "invalid user!";
        }
    }
?>