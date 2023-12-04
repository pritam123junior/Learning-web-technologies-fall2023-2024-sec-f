<?php
include("../controllers/homeControl.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Home</title>
</head>

<body>
<h1><center>Welcome to  home page!</center></h1>
      <h2><center><?= $name ?></center><br></h2>
       <h3> Person Information :<br><h3>
     
    name : <?= $name ?><br>
    email : <?= $email ?><br>
    phone : <?= $phone ?><br>

    <script src="../javascript/login.js"></script>
</body>

</html>