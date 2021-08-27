<?php 
session_start();
include "../includes/dbconfig.php";

if(isset($_GET['token'])){
     
    $token=$_GET['token'];
    $ref="contact/".$token;

    $deleteData= $database->getReference($ref)->remove();

    if($deleteData){
        $_SESSION['status']="Data deleted SuccessFully";
        header("Location: index.php");
    }else{
        $_SESSION['status']="Data cen't br updated. Something Went Wrong";
        header('Location:index.php');
    }

}else{
    $_SESSION['status']="Wrong Path";
    header('Location:index.php');
}

?>