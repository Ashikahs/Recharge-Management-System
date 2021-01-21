<?php
$rcamtErr=$valErr=$oprtrErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$rcamt=trim($_POST["rcamt"]);
	
	$val=trim($_POST["val"]);
	$oprtr=trim($_POST["oprtr"]);	
	if(empty($rcamt))
	{
		$rcamtErr="Enter Recharge Ammount";
	}
	
	

	
	if(empty($val))
	{
		$valErr="Enter Validity";
	}
	
	if(empty($oprtr))
	{
		$oprtrErr="Please Select Operator ";
	}
	
	
		else
	{
	include('conn.php');
	
$query="insert into dthoffrs(rcamt,val,oprtr) values('$rcamt','$val','$oprtr')";
if(mysqli_query($conn,$query))
{
	echo "<script type='text/javascript'>alert('Offer Submitted');</script>";
					
										
}
		}
	}	
	
	
	
if(isset($_POST['cancel']))
{
header('location:about.html');
}
?>
	
		

	
