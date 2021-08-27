<?php 
session_start();
include "../includes/dbconfig.php";

if(isset($_POST['submitData'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $data=[
        'email'=>$email,
        'name'=>$name,
        'phone'=>$phone
    ];

    $ref='contact/';

    $postData= $database->getReference($ref)->push($data);

    if($postData){
        $_SESSION['status']="Data Inserted SuccessFully";
        header("Location: index.php");
    }else{
        $_SESSION['status']="Data Not Inserted. Something Went Wrong";
        header('Location:index.php');
    }

}

?>