<?php
include('connection.php');

$mnumErr=$rcamtErr=$oprtrErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$selected_radio=isset($_POST['card']);
			if ($selected_radio=="cc")
							header('location:ccpay.php');
				
			elseif ($selected_radio=="dc")
				header('location:ccpay.php');
				
				
			elseif ($selected_radio=="ib")
				header('location:selectbank.php');

	}
	
	if(isset($_POST['cancel']))
{
	$query1="select * from tbrc";
$result1=mysqli_query($connection,$query1);
			while($row1=mysqli_fetch_array($result1))
			 {
			 $id=$row1[0];
			 }
			 echo $id;
 $query="delete  from tbrc where id='$id'";
$result=mysqli_query($connection,$query);
header('location:recharge.php'); 
}
?>