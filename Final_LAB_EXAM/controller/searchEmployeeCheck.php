<?php
    require_once('../model/loginModel.php');

    session_start();

    $username = $_POST['username'];


    if($username == "" || $password == "" )
    {
        echo "null username or password!";
    }
    else
    {
        $status = login($username, $password);
        
        if ($status)
        {
            $_SESSION['flag'] = 'true';
            header('location: ../view/userHomePage.php');
        }
        else
        {
            echo "invalid user!";
        }
    }
?>