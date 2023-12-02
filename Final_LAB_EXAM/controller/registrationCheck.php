<?php

    require_once('../model/loginModel.php');
    session_start();

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $email = $_REQUEST['email'];
    $fullName = $_REQUEST['fullName'];
    $contactNo = $_REQUEST['contactNo'];

  
    $user = ['username' => $username, 'password' => $password, 'email' => $email, 'fullName' => $fullName, 'contactNo' => $contactNo];
    $status = registration($user);

    if ($status) {
        echo "You have signed up successfully";
        $_SESSION['flag'] = 'true';
    } else {
        echo "Invalid user!";
    }

<script>
function regcheckvlidation() 
{
    let username = document.getElementById("emp_name").value;
    let contactNo = document.getElementById("emp_cno").value;
    let fullName = document.getElementById("emp_uname").value;
    let password = document.getElementById("emp_pass").value;
  let email= document.getElementById("email").value;
      let confirmPassword= document.getElementById("cp").value;
     if (username < 6) {
        alert("Username must be at least 6 characters long!)";
        
    }

    if (password < 4) {
       alert("Password must be at least 4 characters long");
        
    }

    if (password !== confirmPassword) {
        alert("Password and Confirm Password do not match!");
        
    }

    if (username == "" || password == "" || email == "" || fullName == "" || contactNo == "") {
        alert("Null username or password or email or contact number!)";
         
    }


}
</script>
?>

<html>
<body>
    <hr>
    <br>
    <h2> Click here to<a href="../view/login.php"> lgin </a> </h2>
</body>
</html>
