<?php
include('connection.php');
session_start();
if(isset($_POST['sub']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pwd1=$_POST['pwd1'];
    $q=$db->prepare("INSERT Into login3(username,email,pwd1) values(:username,:email,:pwd1)");
    $q->bindValue('username',$username);
    $q->bindValue('email',$email);
    $q->bindValue('pwd1',$pwd1);
    if($q->execute())
    {
        header("Location: recharge.php");
    }
    else{
         echo "<script> alert('Login Failed')</script>";
    }
        
}
?>