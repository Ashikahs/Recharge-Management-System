
<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="login2.css" type="text/css">

<?php
include('signreg.php');
?>
</head>
<body>
<h1>Registration Form</h1>
        <div class="reg">
<form id="reg" action="login.html"... onsubmit="return checkForm(this);">
  <h2>Register Here</h2>
						
											
								<p>Username:<br>			
                                 	<input name="username" type="text" id="name" placeholder="Enter username" value="<?php if ((isset($username))&&($nameErr==false)){echo $username;}?>" class="txtfield"  style="width:250px; height:20px;" />
								<span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $nameErr;?></span>
                                  </p><br>
								<p>Email:<br>		 
											<input name="email" type="email" id="name" placeholder="Enter your email" value="<?php if ((isset($email))&&($usrErr==false)){echo $email;}?>" class="txtfield" style="width:250px; height:20px;" />
                                <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $usrErr;?></span>
									</p><br>
                                <p>Password:<br>
										<input name="pwd1" type="password" id="name" placeholder="Enter password" value="" class="input3" class="txtfield" style="width:250px; height:20px;" />
                               <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $pwdErr;?></span>
								</p><br>
                                <p>Confirm password:
								<input name="pwd2" type="password" id="name1" value="" placeholder="confirm password" class="txtfield" style="width:250px; height:20px;" />
                                <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $cpwdErr;?></span>
								</p><br>
                                <p>Contact number:			
                                <input name="tel" type="tel" id="name" placeholder="Enter your mobile number" value="<?php if ((isset($tel))&&($cntErr==false)){echo $tel;}?>" class="txtfield" style="width:250px; height:20px;" />
                                <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $cntErr;?></span>
								</p><br>
                                <p>Date of Birth: <input type="date" name="date" id="name" required></p><br>
<p>Gender: <input type="radio" value="Male" name="gender" id="male" checked> Male   
<input type="radio" value="Female" name="gender" id="female"> Female   
<input type="radio" value="Other" name="gender" id="others"> Other 
</p><br>
<input type="checkbox" id="ch"><span id="ch" required>I Agree all the trems and conditions.</span><br><br>
                <button type="submit" name="sub" id="sub">Register</button><br><br>			
											<p>Already have an account? <a href="login3.html">Login here</a></p>


											</td>
										</tr>
									</tbody>
								</table>
                             </form>
          
	
						
						

</body>
</html>