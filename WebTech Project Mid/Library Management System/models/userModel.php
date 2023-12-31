<?php
require_once('db.php');

function login($id, $password)
{
    $con = getConnection();
    $sql = "select * from user_info where id='{$id}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($users, $row);
        }
        $user = $users[0];
        print_r($user[0]);

        session_start();
        $_SESSION['user'] = ['id' => $user['id'], 'name' => $user['name'], 'password' => $user['password'], 'type' => $user['type']];

        $_SESSION['auth'] = "true";
        if ($user['type'] == 'User') {

            header('location: ../views/user_home.php');
        } 
        else {
       
          header('location: ../views/admin_home.php');
        }
    } else {

        return false;
    }
}

function register($id, $name, $password, $type)
{


    $con = getConnection();


    $sql = "select * from user_info where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        print_r("User already exists");
    } else {
        $sql = "insert into user_info (id,name,password,type) values ('{$id}','{$name}','{$password}','{$type}')";
        $result = mysqli_query($con,$sql);


        if ($result) {
            header('location: ../views/login.php');
        } else {

            echo "Error!";
        }
    }
}

function getUser($id)
{
    session_start();
    if (isset($_SESSION['auth']) && $_SESSION['user']) {
        $id = $_SESSION['user']['id'];
    }
    $con = getConnection();
    $sql = "select * from user_info where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($users, $row);
        }
        $user = $users[0];
        print_r($user[0]);

        session_start();
        $_SESSION['user'] = ['id' => $user['id'], 'name' => $user['name'], 'password' => $user['password'], 'type' => $user['user_type']];

        $_SESSION['auth'] = "true";
        if ($user['type'] == 'admin') {
            header('location: ../views/admin_home.php');
        } else {
            header('location: ../views/user_home.php');
        }
    } else {

        return false;
    }
}

function getAllUser()
{
    $con = getConnection();
    $sql = "select * from user_info";
    $result = mysqli_query($con, $sql);
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($users, $row);
    }

    return $users;
}

function updatepassword($id, $password)
{
    session_start();
    if (isset($_SESSION['auth']) && $_SESSION['user']) {
        $id = $_SESSION['user']['id'];
    }
    $con = getConnection();
    $sql = "UPDATE users
    SET password='{$password}'
    WHERE id='{$id}';";
}

function Update($updatebooks)
{
  $con= getConnection();
  $sql= "UPDATE bookData
  SET 
      Quantity= '{$updatebooks['Quantity']}'  WHERE Book_ID = '{$updatebooks['Book_ID']}'";
 
  $result= mysqli_query($con,$sql);

  return $result;
}

    function getviewbook(){
       $con = getConnection();
       $sql = "select * from bookData";
      $result = mysqli_query($con, $sql);
       $users = [];

    while($row = mysqli_fetch_assoc($result)){
    //$users = $row;
       array_push($users, $row);
 }  

    return $users;

     }function AddBook($Book_ID,$Book_Name,$Author,$Genre,$Quantity,$Image){
         $con = getConnection();
         $sql = "insert into BookData (Book_ID,Book_Name,Author,Genre,Quantity,image) values ('{$Book_ID}','{$Book_Name}','{$Author}','{$Genre}','{$Quantity}','{$Image}')";
         
 
        $status = mysqli_query($con, $sql);
        return $status;
     }
     function DeleteUsers($Book_ID){
         $con = getConnection();
         $sql = "DELETE FROM bookData WHERE Book_ID='$Book_ID';";
         $status = mysqli_query($con, $sql);
        return $status;
      }


      function getNotification(){
             $con = getConnection();
             $sql = "select * from notification_alerts ";
             $result = mysqli_query($con, $sql);
            $users = [];

       while($row = mysqli_fetch_assoc($result)){
  //$users = $row;
        array_push($users, $row);
      }

        return $users;
      }function Notify($bookInfo,$user_id){
        $con = getConnection();
        $sql = "insert into $user_id values('','{$bookInfo['Notification_Data']}','{$bookInfo['Date']}')";
        $status = mysqli_query($con, $sql);
        return $status;
      }
      function getTrendbooks(){
        $con = getConnection();
        $sql = "select * from Trendingbooks";
       $result = mysqli_query($con, $sql);
        $users = [];
 
     while($row = mysqli_fetch_assoc($result)){
     //$users = $row;
        array_push($users, $row);
  }
}
    function librarianNotify($Notification_ID,$Notification_Data){
    $con = getConnection();
    $sql = "INSERT INTO `librarian_notification`(`Notification_ID`, `Notification_Data`) VALUES ('$Notification_ID','$Notification_Data')";
   $status = mysqli_query($con, $sql);
   return $status;
}
function getlibrarianNotify(){
    $con = getConnection();
    $sql = "select * from librarian_notification ";
   $result = mysqli_query($con, $sql);

   $users = [];

   while($row = mysqli_fetch_assoc($result)){
//$users = $row;
    array_push($users, $row);
  }

    return $users;
  
}
function getuserviewbook(){
    $con = getConnection();
    $sql = "select * from bookData";
   $result = mysqli_query($con, $sql);
    $users = [];

 while($row = mysqli_fetch_assoc($result)){
 //$users = $row;
    array_push($users, $row);
}  

 return $users;
}
function Review($book_ID,$User_Name,$Rating,$Reviews,$date)
{
    $con = getConnection();
  $sql = "insert into $book_ID (Book_ID,User_Name,Rating,Reviews,Date) values ('{$book_ID}','{$User_Name}','{$Rating}','{$Reviews}','$date')";
  //$sql = "insert into $book_id values('','{$bookInfo['User_Name']}','{$bookInfo['Rating']}','{$bookInfo['Reviews']}','{$bookInfo['Date']}')";
   $result = mysqli_query($con, $sql);
   return $result;
}
function Trend($Book_ID,$Book_Name,$Author,$Genre,$Image){
    $con = getConnection();
    $sql = "insert into Trending (Book_ID,Book_Name,Author,Genre,image) values ('{$Book_ID}','{$Book_Name}','{$Author}','{$Genre}','$Image')";
    

   $status = mysqli_query($con, $sql);
}


function getviewtrendBook(){
    $con = getConnection();
    $sql = "select * from Trending";
   $result = mysqli_query($con, $sql);
    $users = [];

 while($row = mysqli_fetch_assoc($result)){
 //$users = $row;
    array_push($users, $row);
}  
}