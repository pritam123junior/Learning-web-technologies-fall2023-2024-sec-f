<?php 

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        echo "<h3>null username/password!</h3>";
    }else if($username == $_REQUEST['username'] && $password == $_REQUEST['password']){
        setcookie('flag', 'true', time()+4000, '/');
        header('location: dashboard.php');
    }else{
        echo "<h3>invalid user!</h3>";
    }
?>