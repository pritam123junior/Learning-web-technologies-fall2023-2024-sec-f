<?php
   session_start();
  require_once('../models/userModel.php');
  if (isset($_POST['submit'])){
    $user_id=$_POST['User_id'];
    $Notification_ID=$_POST['Notification_id'];
    $Notification_Data=$_POST['Notification_Data'];
  

    if(  $user_id == "" || $Notification_ID== ""|| $Notification_Data== ""){
        echo "Please Enter Date first";   
    }else{
        $_SESSION['flag'] = "true";
        $Books = ['$Notification_ID'=> $Notification_ID,'Notification_Data'=> $Notification_Data];
        $status = Notify($Books,$user_id);
        if($status){
           
            header('location: ../views/Notification.php');
        }else{
      echo "Error:";
      }
    
    }
  }  
?>