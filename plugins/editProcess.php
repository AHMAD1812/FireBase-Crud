<?php 
session_start();
include "../includes/dbconfig.php";

if(isset($_POST['updateData'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $token=$_POST['token'];

    $data=[
        'email'=>$email,
        'name'=>$name,
        'phone'=>$phone
    ];

    $ref="contact/".$token;

    $postData= $database->getReference($ref)->update($data);

    if($postData){
        $_SESSION['status']="Data updated SuccessFully";
        header("Location: index.php");
    }else{
        $_SESSION['status']="Data cen't br updated. Something Went Wrong";
        header('Location:index.php');
    }

}

?>