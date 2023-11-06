<?php
   session_start();
  require_once('../models/userModel.php');
  if (isset($_POST['submit'])){
    $Book_ID=$_POST['Bookid'];
   $Book_Name=$_POST['Bookname'];
    $Author=$_POST['Author'];
    $Genre=$_POST['Genre'];
    $Quantity=$_POST['Quantity'];

    if( $Book_Name == "" || $Author== ""|| $Genre== ""|| $Quantity== ""){
        echo "Please Enter Date first";   
    }else{
        $_SESSION['flag'] = "true";
        $Books = ['Book_ID'=>$Book_ID,'Book_Name'=> $Book_Name,'Author'=> $Author ,'Genre'=> $Genre, 'Quantity'=> $Quantity];
        $status = Update($Books);
        if($status){
           
            header('location: ../views/ViewBook.php');
        }else{
      echo "Error:";
      }
    
    }
  }  
?>