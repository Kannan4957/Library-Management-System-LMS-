<?php
include '_database.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $sql="SELECT * FROM `admin-info` WHERE `admin-name`='$email' and `admin-pass`='$password'";
    $result=mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result)>0){
            session_start();
            $_SESSION["mail"]=$email;
                $_SESSION["alert"]=true;
                header("location:..\admin.php");
        }
        else{
            $_SESSION["alert"]=false;
            header("location:..\index.php");
        }
    }
}
?>