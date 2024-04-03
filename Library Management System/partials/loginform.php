<?php
include '_database.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $sql="SELECT * FROM `user-info` WHERE `User-mail`='$email' and `User-password`='$password'";
    $result=mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result)>0){
            session_start();
          $_SESSION["mail"] = $email;
          $_SESSION["alert"]=true;
           header("location:..\home.php");
        }
        else{
            session_start();
            $_SESSION["alert"]=false;
            header("location:..\home.php");
        }
    }
}
?>
