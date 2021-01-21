<?php
include('connection.php');
session_start();
if(isset($_POST['sub']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pwd1=$_POST['pwd1'];
    $pwd2=$_POST['pwd2'];
    $tel=$_POST['tel'];
    $q=$db->prepare("INSERT Into login1(username,email,pwd1,pwd2,tel) values(:username,:email,:pwd1,:pwd2,:tel)");
    $q->bindValue('username',$username);
    $q->bindValue('email',$email);
    $q->bindValue('pwd1',$pwd1);
    $q->bindValue('pwd2',$pwd2);
    $q->bindValue('tel',$tel);
    if($q->execute())
    {
        echo "<script> alert('Registration Successful')</script>";
        header("Location: login3.html");
    }
    else{
         echo "<script> alert('Registration Failed')</script>";
    }
        
}
?>