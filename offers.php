<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge </title>
	<link href="bootstrap.css" rel="stylesheet" type="text/css" media="all" />
 
<link href="style.css" rel="stylesheet" type="text/css" />
	
	
<?php
include('ofrreg.php');
include('conn.php');
session_start();
?>
</head>
<body>
<link rel="stylesheet" href="style3.css" type="text/css">
	<div id="background">
		<div id="page">
			<div id="header">
			
			<div align="right" ><?php if (isset($_SESSION['name']))
      echo "<font color='blue'>".$_SESSION['name']."</font><br><br>";
?>
</div>
				<div id="navigation">
					<ul>
						<li>
							<a href="about.html">About</a>
						</li>
						<li >
							<a href="dthrecharge.php">DTH</a>
						</li>
						
					<li  class="selected">
						<a href="offers.php">Offers</a>
					</li>
					<li >
						<a href="contact.php">Contact</a>
					</li>
						
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
					
						<div id="contact" class="body">
						<h1>Add Offers</h1>
                        <form id="form2" name="form2" method="post" action="" >
						<table>
									<tbody>
										<tr>
											<td> Ammount:</td>
											<td>
											<input name="rcamt" type="text" value="<?php if ((isset($rcamt))&&($rcamtErr==false)){echo $rcamt;}?>"  class="txtfield" />
								  <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $rcamtErr;?></span>
									</td>
										</tr> 
										<tr>
											<td> Talktime:</td>
											<td>
											<input name="tktm" type="text" value="<?php if ((isset($tktm))&&($tktmErr==false)){echo $tktm;}?>"  class="txtfield" />
                                <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $tktmErr;?></span>
											
									</td>
										</tr> 
										<tr>
											<td>Validity:</td>
											<td>
											<input name="val" type="text" value="<?php if ((isset($val))&&($valErr==false)){echo $val;}?>" class="txtfield"  />
                                <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $valErr;?></span>
											
									</td>
										</tr> 
										<tr>
											<td>Operator: </td>
										<td>
										<select name="oprtr" value="<?php if ((isset($oprtr))&&($oprtrErr==false)){echo $oprtr;}?>"  class="txtfield">
					<option value="">---Please Select Your Operator---</option>
					<option data-tokens="Select Operator">Select Operator</option>
                                  <option data-tokens="Airtel">Airtel</option>
                                  <option data-tokens="Aircel">Aircel</option>
                                  <option data-tokens="BSNL">BSNL</option>
                                  <option data-tokens="Tata Docomo">Tata Docomo</option>
                                  <option data-tokens="Reliance GSM">Reliance GSM</option>
                                  <option data-tokens="Reliance CDMA">Reliance CDMA</option>
                                  <option data-tokens="Telenor">Telenor</option>
                                  <option data-tokens="Jio">Jio</option>
                                  <option data-tokens="Vodafone">Vodafone</option>
                                  <option data-tokens="Idea">Idea</option>
                                  <option data-tokens="MTS">MTS</option>
        	        <?php
					 $query="select * from tboprtr";
					$result=mysqli_query($conn,$query);
					  while($array = mysqli_fetch_array($result))
			  {
				echo "<option value='$array[1]'>$array[1]</option>";
			  }
			  ?>
      	            </select>
                      <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $oprtrErr;?></span>
</td>
										</tr> 
										 <tr>
											<td></td>
											<td>
											 <input name="signup" type="submit" value="Add"class="btn" />
                                       <input name="cancel" type="submit" value="Cancel" class="btn" />
											
										</td>
										</tr>
										
										<tr>
										<td >
										<a  href="dthoffers.php">DTH Offers</a></td>
										</tr>
									</tbody>
								</table>
                             </form>
                    
<h2>Recharge Hub</h2>
							<p><img src="recharge_banner.png" alt="Img"></p>	
						</div>
					</div>
				</div>
			</div>
		</div>
			
        <footer>
    <div class="container-fluid">
        <div class="w3-agile-footer-top-at">
            <div class="col-md-2 agileits-amet-sed">
                <h4>Company</h4>
                <ul class="w3ls-nav-bottom">
				<li><a href="about.html">About Us</a></li> 
                    <li><a href="index3.html" class="scroll">Mobile</a></li>   
                    <li><a href="contact.php">Contact</a></li>
                    
                </ul>   
            </div>
            <div class="col-md-3 agileits-amet-sed ">
                <h4>Mobile Recharges</h4>
                    <ul class="w3ls-nav-bottom">
                        <li><a href="index3.html" class="scroll">Airtel</a></li>
                        <li><a href="index3.html" class="scroll">Vodafone</a></li>
                        <li><a href="index3.html" class="scroll">BSNL</a></li>
                        <li><a href="index3.html" class="scroll">Tata Docomo</a></li>
                        <li><a href="index3.html" class="scroll">Reliance GSM</a></li>     
                        <li><a href="index3.html" class="scroll">Jio</a></li>  
                    </ul>   
            </div>
            <div class="col-md-3 agileits-amet-sed ">
			<h4>Offers</h4>
                   <ul class="w3ls-nav-bottom">
                        <li><a href="offers.php">Mobile Recharge Offers</a></li>
                        <li><a href="dthoffers.php">DTH Offers</a></li> 
                    </ul> 
            </div>
            <div class="col-md-2 agileits-amet-sed">
                <h4>DTH Recharges</h4>
                <ul class="w3ls-nav-bottom">
                        <li><a href="#mobilew3layouts" class="scroll"> Airtel Digital TV Recharges</a></li>
                        <li><a href="#mobilew3layouts" class="scroll">Dish TV Recharges</a></li>
                        <li><a href="#mobilew3layouts" class="scroll">Tata Sky Recharges</a></li>
                        <li><a href="#mobilew3layouts" class="scroll">Reliance Digital TV Recharges</a></li>
                        <li><a href="#mobilew3layouts" class="scroll">Sun Direct Recharges</a></li>
                        <li><a href="#mobilew3layouts" class="scroll">Videocon D2H Recharges</a></li>   
                    </ul>   
            </div>
            <div class="col-md-2 agileits-amet-sed ">
                <h4>Payment Options</h4>
                   <ul class="w3ls-nav-bottom">
                        <li>Credit Cards</li>
                        <li>Debit Cards</li>
                        <li>Any Visa Debit Card (VBV)</li>
                        <li>Direct Bank Debits</li>
                        <li>Cash Cards</li> 
                    </ul>   
            </div>
        <div class="clearfix"> </div>
        </div>
    </div>
    <div class="w3l-footer-bottom">
        <div class="container-fluid">
            <div class="col-md-4 w3-footer-logo">
                <h2><a href="index3.html">ONLINE RECHARGE</a></h2>
      </div>
      <div class="col-md-8 agileits-footer-class">
        <p >© 2020 Online Recharge. All Rights Reserved</p>
      </div>
    <div class="clearfix"> </div>
    </div>
  </div>
</footer>
</body>
</html>

</body>
</html>