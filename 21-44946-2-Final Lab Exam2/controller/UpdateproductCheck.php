
<?php
   session_start();
  require_once('../models/userModel.php');
  if (isset($_POST['submit'])){
   $Product_ID=$_POST['Productid'];
    $Product_Name=$_POST['Productname'];
    $Quantity=$_POST['Quantity'];


     if( $Product_ID == "" || $Product_Name== ""|| $Quantity== ""){
        echo "Please Enter Data first"; 
        echo '<br>';
        echo '<a href="../views/Addbook.php">Go Back </a>';  
    }else{
        $_SESSION['flag'] = "true";
        $Products = ['Product_ID'=>$Product_ID,'Product_Name'=> $Product_Name,'Quantity'=> $Quantity];
        $status = Update($Products);
        if($status){
           
            header('location: ../views/page2.php');
        }else{
      echo "Error:";
      }
    
    }
  }  


?>