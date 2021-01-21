<?php
include('conn.php');
session_start();
   
   if (isset($_SESSION['userlogin']))
   {
      $name= $_SESSION['userlogin'];
	  
	  }
$cnumErr=$exp1Err=$exp2Err=$cvvErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$cnum=trim($_POST["cnum"]);
	$exp1=trim($_POST["exp1"]);
	$exp2=trim($_POST["exp2"]);	
	$cvv=trim($_POST["cvv"]);	
	if(empty($cnum))
	{
		$cnumErr="Enter Card Number";
	}
	
	else
	{
		if(!preg_match("/^[0-9]*$/",$cnum))
		{
			$cnumErr="Contact Number Is In Digits";
		}
	else
	{
		if((strlen($cnum)<8)||(strlen($cnum)>8))
		{
			$cnumErr="Enter 8 Digits Card Number";
		}
	}
	}

	if(empty($exp1))
	{
		$exp1Err="Please Enter Month ";
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$exp1))
		{
			$exp1Err="Month In Digits";
		}else
	{
		if((strlen($exp1)<2)||(strlen($exp1)>2))
		{
			
		}
	}
		}
	if(empty($exp2))
	{
		$exp2Err="Please Enter Year";
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$exp2))
		{
			$exp2Err="Year In Digits";
		}else
	{
		if((strlen($exp2)<4)||(strlen($exp2)>4))
		{
			
		}
	}
		}
	if(empty($cvv))
	{
		$cvvErr="Enter CVV Number";
	}
		else
	{
		if(!preg_match("/^[0-9]*$/",$cvv))
		{
			$cvvErr="CVV In Digits";
		}
	else
	{
		if((strlen($cvv)<3)||(strlen($cvv)>3))
		{
			$cvvErr="Enter 3 Digits CVV";
		}
	
	
		else
	{
	
	include('conn.php');
	$query="insert into tbcard(cnum,exp1,exp2,cvv) values('$cnum','$exp1','$exp2','$cvv')";
if(mysqli_query($conn,$query))
{
									header('location:connect.php');
										
}
	}}
}}	
if(isset($_POST['cancel']))
{
header('location:recharge.php'); 
}
?>
	
		

	
