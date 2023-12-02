<?php
    require_once('../model/db.php');

    session_start();

    $username = $_POST['username'];


$con=mysqli_connect('localhost', 'root', '', 'webtech');
$sql = "select * from employee where name like '%{$username}%'";
$result = mysqli_query($con, $sql);


?>
<html>
<head>
    <title>search employuee</title>
</head>
<body>

       
<table cellspacing="0" align="center" cellpadding="5">
     <tr>
        <td> ID</td>
        <td>Name</td>
        <td>contact</td>
   
   </tr>  
        
             <?php while($data = mysqli_fetch_assoc($result)){ ?>
    <tr>
    <td><?=$data['ID']?></td>  
        <td><?=$data['name']?></td>
        <td><?=$data['Contact']?></td>   
                   
        <?php 
                    
            }
        ?>
</table>

</body>
</html>