<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{	
		include('conn.php');
echo "<script type='text/javascript'>alert('Transaction Success');</script>";

		} 
		

	

	
	
if(isset($_POST['cancel']))
{
$query="update tbrc SET status = 'failed' where id = '$id' ";
$result=mysqli_query($conn,$query);
header('location:recharge.php');
}
?>
	
		

	
