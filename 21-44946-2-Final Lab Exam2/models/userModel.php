<?php
require_once('db.php');

function login($id, $password)
{
    $con = getConnection();
    $sql = "select * from reg_info where id='{$id}' and password='{$password}'";
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
        $_SESSION['user'] = ['id' => $user['id'], 'name' => $user['name'], 'password' => $user['password'],'gender' => $user['gender'],'email' => $user['email'],'dob' => $user['dob'], 'type' => $user['user_type']];

        $_SESSION['auth'] = "true";
        if ($user['type'] == 'User') {
            header('location: ../views/Buyer.php');
        } else if ($user['type'] == 'Admin'){
            header('location: ../views/Seller.php');
        }
        else{
            header('location: ../views/Admin.php');
        }
    } else {

        return false;
    }
}


function register($id, $name, $password,$email,$gender,$dob, $type)
{
    $con = getConnection() ;
    $sql = "select * from reg_info where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        print_r("User already exists");
    } else {
        $sql = "insert into reg_info (id,name,password,email,gender,dob,type) values ('{$id}','{$name}','{$password}','{$email}','{$gender}','{$dob}','{$type}')";
        $result = mysqli_query($con, $sql);


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
    $sql = "select * from reg_info where id='{$id}'";
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
         if ($user['type'] == 'User') {
            header('location: ../views/page1.php');
        } else if ($user['type'] == 'Admin'){
            header('location: ../views/page2.php');
        }
        else{
            header('location: ../views/page3.php');
        }
    } else {

        return false;
    }
}


function getAllUser()
{
    $con = getConnection();
    $sql = "select * from reg_info";
    $result = mysqli_query($con, $sql);
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($users, $row);
    }

    return $users;
}




function getviewproduct(){
    $con = getConnection();
    $sql = "select * from catagory";
    $result = mysqli_query($con, $sql);
    $users = [];

    while($row = mysqli_fetch_assoc($result)){
    //$users = $row;
       array_push($users, $row);
    }  
    return $users;
}





function AddProduct($productInfo){
    $con = getConnection();
    $sql = "insert into catagory values('','{$productInfo['Productname']}','{$productInfo['Quantity']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}








function Update($updatebooks)
{
  $con= getConnection();
 $sql= "UPDATE catagory
  SET Book_Name = '{$updatebooks['Book_Name']}', 
      Author= '{$updatebooks['Author']}', 
      Catagory= '{$updatebooks['Catagory']}' 
  WHERE Book_ID = '{$updatebooks['Book_ID']}'";

  
  $result= mysqli_query($con,$sql);

  return $result;
}

function DeleteBooks($Book_ID){
    $con = getConnection();
    $sql = "DELETE FROM catagory WHERE Book_ID='$Book_ID';";
    $status = mysqli_query($con, $sql);
    return $status;
}







