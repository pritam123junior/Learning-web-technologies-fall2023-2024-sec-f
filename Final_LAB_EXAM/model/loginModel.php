<?php

    require_once('db.php');
    function login($username, $password)
    {
        $con = getConnection();
        $sql = "select * from users where userName='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        
        if($count > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function registration($user)
    {
        $username = $user['username'];
        $password = $user['password'];
        $email = $user['email'];
        $fullName = $user['fullName'];
        $contactNo = $user['contactNo'];
        
        $con = getConnection();
        $sql = "INSERT INTO users (username, password, email, full_name, contact_no)
        VALUES ('$username', '$password', '$email', '$fullName','$contactNo')";

        if (mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function adminLogin($username, $password)
    {
        $con = getConnection();
        $sql = "select * from adminInfo where userName='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        
        if($count > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function addAdmin($user)
    {
        $username = $user['username'];
        $password = $user['password'];
        $email = $user['email'];
        $fullName = $user['fullName'];
        $contactNo = $user['contactNo'];
        
        $con = getConnection();
        $sql = "INSERT INTO adminInfo (username, password, email, full_name, contact_no)
        VALUES ('$username', '$password', '$email', '$fullName','$contactNo')";

        if (mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function addUser($user)
    {
        $username = $user['username'];
        $password = $user['password'];
        $email = $user['email'];
        $fullName = $user['fullName'];
        $contactNo = $user['contactNo'];
        
        $con = getConnection();
        $sql = "INSERT INTO users (username, password, email, full_name, contact_no)
        VALUES ('$username', '$password', '$email', '$fullName','$contactNo')";

        if (mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

?>