<?php
  include('db.php');
   
   $con = getConnection();

   if (!$con)
   {
       die("Connection failed: " . mysqli_connect_error());
   }
   $Bookid = $_POST['Bookid'];
   $BookName = $_POST['bookName'];
   $Author = $_POST['Author'];
   $Genre = $_POST['Genre'];
   $Quantity = $_POST['Quantity'];
   $query = $_POST['query'];

   $sql = "insert into BookData (Book_ID,Book_Name,Author,Genre,Quantity,image) values ('{$Bookid}','{$BookName}','{$Author}','{$Genre}','{$Quantity}')";
   $result = mysqli_query($con, $sql);
   return $result;

    if(  $Bookid == "" ||$BookName == "" || $Author== ""|| $Genre== ""|| $Quantity== ""){
        echo "Please Enter Date first";   
    }else{
     
       
       
      
           
            header('location: ../view/ViewBook.php');
        }else{
      echo "Error:";
      }
    
      mysqli_close($con);
    
    
  
?>