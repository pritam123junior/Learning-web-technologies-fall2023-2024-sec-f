<?php
  require_once('../models/userModel.php');
  require_once('../models/db.php');
  $viewbook = getviewbook();
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Database</title>
</head>
<body>

       
        <h2>Book Details</h2>
<table border="1" cellspacing="0" align="center" cellpadding="5">
     <tr>
        <td>Book ID</td>
        <td>Book Name</td>
        <td>Author</td>
        <td>Genre </td>
        <td>Quantity</td>

       </tr>
            
    
               <?php for($i=0; $i<count($viewbook); $i++){
        ?>
                    
             <tr>
                    <td><?=$viewbook[$i]['Book_ID']?></td>
                    <td><?=$viewbook[$i]['Book_Name']?></td>
                    <td><?=$viewbook[$i]['Author']?></td>
                    <td><?=$viewbook[$i]['Genre']?></td>
                    <td><?=$viewbook[$i]['Quantity']?></td>
                   
            
                   <td>
                   <a href="AddBook.php?id=<?=$viewbook[$i]['Book_ID']?>">Add Book  </a> 
                       <a href="Update.php?id=<?=$viewbook[$i]['Book_ID']?>"> Update</a> 
                      <a href="DeleteBook.php?id=<?=$viewbook[$i]['Book_ID']?>">Remove  </a>
                     
                    </td>
               </tr>    
                    
        <?php 
                    
            }
        ?>
</table>
    
  
</body>
</html>