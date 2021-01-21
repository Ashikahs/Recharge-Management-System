<?php
include('connection.php');
session_start();
if(isset($_POST['next']))
{
    $txnnum=$_POST['txnnum'];
    $nam=$_POST['nam'];
    $typ=$_POST['typ'];
    $mnum=$_POST['mnum'];
    $oprtr=$_POST['oprtr'];
    $rcamt=$_POST['rcamt'];
    $q=$db->prepare("INSERT Into tbrc(txnnum,nam,typ,mnum,oprtr,rcamt) values(:txnnum,:nam,:typ,:mnum,:oprtr,:rcamt)");
    $q->bindValue('txnnum',$txnnum);
    $q->bindValue('nam',$nam);
    $q->bindValue('typ',$typ);
    $q->bindValue('mnum',$mnum);
    $q->bindValue('oprtr',$oprtr);
    $q->bindValue('rcamt',$rcamt);
    if($q->execute())
    {
        echo "<script> alert('Registration Successful')</script>";
        header("Location: mkpayment.php");
    }
    else{
         echo "<script> alert('Registration Failed')</script>";
    }
        
}
?>