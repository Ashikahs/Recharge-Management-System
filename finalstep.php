<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Netbank</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style3.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="cufon-yui.js"></script>
<script type="text/javascript" src="arial.js"></script>
<script type="text/javascript" src="cuf_run.js"></script>
<?php

include('fnlstp.php');

?>

</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
    <center>
      <div class="logo">
        <h1><a href="#"><span>Net</span><small>Bank</small></a></h1>
      </div>
     <center>
      <div class="clr"></div>
    </div>
  </div>
  <center>
  <div class="hbg">
    <div class="hbg_resize"> <img src="hbg_im.jpg" width="500" height="258" alt="" class="hbgimg" />
    </div>
  </div>
  <center>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Pay By Card</h2>
          
        </div>
        <div class="article">
		
         
                          <centre><form id="form2" name="form2" method="post" action="transaction.html" style="margin:auto;">
						
							    <li>
                <label for="email">Name:</label>
                <input type="name" id="name" placeholder="Name" value=""/><br/><br/>
				<?php  
							if (isset($_SESSION['userlogin']))
   {
      $name= $_SESSION['userlogin'];
	  echo strtoupper($name);
	
	  }?>
				
             
              </li>
             
              <li>
                <label for="password">Transaction Password:</label>
				<input id="name" class="text" name="txnpass" type="password" placeholder="PASSWORD"value=""  style="width:250px; height:25px;" />
								  <span style="color:red; font-family:Times New Roman; font-size:12px;"></span>
				
				<br></br>
             
              </li>
              
              <li>
			     <input name="prcd" type="submit" value="PROCEED" />
                                       <input name="cancel" type="submit" value="CANCEL" />
           
                <div class="clr"></div>
              </li>
          </form>
		  </centre>
          </div>
      </div>
      
      <div class="clr"></div>
    </div>
  </div>
 
  
</body>
</html>