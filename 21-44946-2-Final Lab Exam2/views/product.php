<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
require_once('../models/userModel.php');
$viewproduct = getviewproduct(); 
?>

<!DOCTYPE html>
<html>
<head> 
    <script src="../Assests/catalog.js"></script>
    <title> Database</title>
  

    
</head>
<body>

<table border="3" style="width:80%; max-width:600px; margin:auto;" cellspacing="1" cellpadding="5">
    <div class="left">
    <tr>
        <th colspan="5"><h2><b>Product Details</b></h2></th>
    </tr>
  
   <tr>
                            <td>Product ID</td>
                            <td>Product Name</td>
                            <td>Quantity</td>
         
                        </tr>



<?php for($i=0; $i<count($viewproduct); $i++){
                            ?>           
                        <tr>
                             <td><?=$viewproduct[$i]['Product_ID']?></td>
                            <td><?=$viewproduct[$i]['Product_Name']?></td>
                            <td><?=$viewproduct[$i]['Quantity']?></td>
              
                        </tr>                 
                            <?php                                        
                                }
                            ?>

    <tr>
        <td colspan="5" align="center"><a href="user_home.php">Go Home</a></td>
    </tr>
                            </div>
    <div class="right">
   
                            </div>
</table>




</body>
</html>
