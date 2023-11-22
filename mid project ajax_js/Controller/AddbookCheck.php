<?php
   
   $con = getConnection();

   if (!$con)
   {
       die("Connection failed: " . mysqli_connect_error());
   }

   $query = $_POST['query'];

   $sql = "insert into BookData (Book_ID,Book_Name,Author,Genre,Quantity,image) values ('{$Book_ID}','{$Book_Name}','{$Author}','{$Genre}','{$Quantity}','{$Image}')";
   $result = mysqli_query($con, $sql);
   return $result;

    if( $Book_Name == "" || $Author== ""|| $Genre== ""|| $Quantity== ""|| $Image== ""){
        echo "Please Enter Date first";   
    }else{
     
       
       
      
           
            header('location: ../views/ViewBook.php');
        }else{
      echo "Error:";
      }
    
      mysqli_close($con);
    
    
  
?>