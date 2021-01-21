<?php
session_start();
$usrErr=$pwdErr="";
if(isset($_SESSION['bnam']))
{
$bnknam=$_SESSION['bnam'];
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$usrname=trim($_POST["usr"]);
	$passwrd=trim($_POST["pwd"]);
	if(empty($usrname))
	{
		$usrErr="Username is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$usrname))
		{
			$usrErr="Invalid username";
		}
	}
	if((empty($passwrd)))
	{
		$pwdErr="Password is required";
	}
	else
	{
		if((!preg_match("/^[a-zA-Z0-9]*$/",$passwrd)))
		{
			$pwdErr="Password should be Alpha numeric";
		}
		else
		{
			if((strlen($passwrd)<6)||(strlen($passwrd)>12))
			{
				$pwdErr="Password should be 6-12 digits ";
			}
			else
			{
			include('connection.php');
			$query="SELECT * FROM tbbank WHERE (usrnam='$usrname' and pass='$passwrd') and bname='$bnknam'";
			$result=mysqli_query($connection,$query);
			 if (mysqli_num_rows($result) == 1)
			 {
			$row=mysqli_fetch_array($result);
			$_SESSION['dbrecharge']='true';
			$_SESSION['id']=$row[0];
			
			$ubname=$row[2];
		$usrname=$row[4];
			  
      
      $_SESSION['user'] = $ubname;
	 $_SESSION['usernm'] = $usrname;
	 echo $_SESSION['usernm'];
			header('Location:maketrans.php');
			
			}
			else{
			echo "<script type='text/javascript'>alert('Invalid login');</script>";
			
			}
			
		
		}
	}
}
}
if(isset($_POST['cancel']))
{
include('connection.php');
$query1="select * from tbrc";
$result1=mysqli_query($connection,$query1);
			while($row1=mysqli_fetch_array($result1))
			 {
			 $id=$row1[0];
			 }
			 echo $id;
 $query="delete  from tbrc where id='$id'";
$result=mysqli_query($connection,$query);
header('location:./redirect.php'); 
}
?>
