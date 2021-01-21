<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link href="bootstrap.css" rel="stylesheet" type="text/css" media="all" />
 
<link href="style.css" rel="stylesheet" type="text/css" />
	
	<?php
session_start();
include('connection.php');
include('payreg.php');
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
						<li  class="selected">
							<a href="recharge.php">Mobile</a>
						</li>
						<li >
							<a href="dthrecharge.php">DTH</a>
						</li>
					<li >
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
						<h1>Payment Mathod</h1>

                        <form id="form2" name="form2" method="post" action="" style="margin:auto;">
                              <table>
									<tbody>
									<tr>
									<td>Credit Card</td>
											<td>
											 <input type="radio"name="card"value="cc" checked>

										</td>
										</tr>
										<tr>
											<td>Debit Card</td>
											<td>
											 <input type="radio"name="card"value="dc">

										</td>
										</tr> 
										<tr>
											<td>Internet</td>
										<td>
										 <input type="radio"name="card"value="ib">
										</td>
										</tr> 
										
										
											<td></td>
											<td>
											<input name="next" type="submit" value="Next" class="btn" />
<input name="cancel" type="submit" value="Cancel" class="btn" />
											
										</td>
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