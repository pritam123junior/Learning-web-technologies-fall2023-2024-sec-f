<?php
   require_once('../models/db.php');
 require_once('../models/userModel.php');


    $con = getConnection();
  $sql = "select * from bookdata";
  $result = mysqli_query($con, $sql);
  ?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Database</title>
</head>
<body>

       
        <h2>Most Trending Book</h2>
<table  cellspacing="0" cellpadding="5">
  
            
    
<?php while($viewbook = mysqli_fetch_assoc($result)){ ?>
      
           <tr>
           <td>ID-<?=$id=$viewbook['Book_ID']?> </td>
               </tr>
                    
           
               <tr>
                   
                    <td><?=$viewbook['Book_Name']?></td>
                    <td>Author:<?=$viewbook['Author']?></td>
                    
                    <tr>
                    <td>Genre:<?=$viewbook['Genre']?></td>
        
               </tr>
    
                   
               <tr>
            
                   <td>
                   <a href="AddBook.html?Bookid=<?=$viewbook['Book_ID']?>">AddBook </a> 
                  
                    
                    </td>
                    
               </tr>    
               <tr>
             <td colspan="2"><hr></td>
     </tr>       
        <?php 
                    
            }
          
        ?>
</table>
    

            
</body>
</html>
