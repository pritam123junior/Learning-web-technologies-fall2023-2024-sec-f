
<?php 
require_once '../models/userModel.php';
    //session_start();
    if(isset($_GET['Product_ID'])){
       $Product_ID = $_GET['Product_ID'];
    
          
        $status = DeleteProducts($Product_ID);
        
        if($status){
            header('location: ../views/Deletenewbook.php'); 
        }else{
            echo "DB error, try again";
        }
    }
    
?>
