<?php
$nameErr=$usrErr=$emailErr=$pwdErr=$cpwdErr=$apntidErr=$spcltyErr=$cntErr=$vtErr=$otErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username=trim($_POST["username"]);
	$email=trim($_POST["email"]);
	$pwd1=trim($_POST["pwd1"]);
	$pwd2=trim($_POST["pwd2"]);
	
	$cnt=trim($_POST["username"]);
	
	if(empty($username))
	{
		$nameErr="username is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z]*$/",$username))
		{
			$nameErr="Only alphabets and white space allowed";
		}
	}
	
	 if(empty($username))
	{
		$usrErr="Username is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
		{
			$usrErr="Only alpha-numeric allowed";
		}
	}
	if(empty($tel))
	{
		$cntErr="Contact Number Is Required";
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$tel))
		{
			$cntErr="Contact Number Is In Digits";
		}
	else
	{
		if((strlen($tel)<10)||(strlen($tel)>10))
		{
			$cntErr="Enter 10 Digits Contact Number";
		}
	}
	}
	
		if(empty($pwd1))
	{
		$pwdErr="Password is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$pwd1))
		{
			$pwdErr="Password should be alpha numeric digits";
		}
	else
	{
		if((strlen($pwd1)<6)||(strlen($pwd1)>12))
		{
			$pwdErr="Password should be 6-12 digits";
		}
	}
	}
	
	
	
	if(empty($pwd2))
	{
		$cpwdErr="Confirm Password is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$pwd2))
		{
			$cpwdErr="Password should be alpha numeric digits";
		}
	else
	{
		if((strlen($pwd2)<6)||(strlen($pwd2)>12))
		{
			$cpwdErr="Password should be 6-12 digits";
		}
	else
	{
		if($pwd1!=$pwd2)
		{
			$cpwdErr="Oops! Password did not match, try again";
		}
		

	else
	{
	include('conn.php');
	$db_usrquery="SELECT * FROM login1 WHERE username='$username' ";
	$result=mysqli_query($conn,$db_usrquery);
	$checkusr=mysqli_fetch_array($result,MYSQLI_NUM);
	if($checkusr[0]>1)
	{
	echo "<script type='text/javascript'>alert('Username already exist');</script>";
	}
		else
		{
	$usrrol='S';
$query="insert into login1(username,email,pwd1,usrrol,tel) values('$username','$email','$pwd1','$usrrol','$tel')";
if(mysqli_query($conn,$query))
{
	echo "<script type='text/javascript'>alert('Registration Successfull');</script>";
									header('location:login.php');
										
}
		}
	}
	
	
	}
	}
	}
	}
if(isset($_POST['cancel']))
{
header('location:./index.php');
}
?>
	
		

	
