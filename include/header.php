<!-- Connect AND SEE IF ITS SESSION OR COOKIE -->
<?php
	include("connect.php");
?>


<!DOCTYPE html>
<html lang='en-GB'>
	<head>
    <meta charset="UTF-8" />
    	<title>Welcome</title>
         <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/css/header.css' />
         <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/css/content.css' />
         <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/css/footer.css' />
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
   		<script src="js/banner.js" type="text/javascript"></script>
        <!------------------------------------Spry Panels--------------------------------------------> 
		<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>       
		<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
		<!----------------------------------------------------------------------------------------->
        <!--------------------------------- SCROLL BAR -------------------------------------------->
       <!----------------------------------------------------------------------------------------->
          <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/scrollbar/scrolbar.css' />
<!-- ******************************************************************************************-->
<script src="js/translucentslideshow.js" type="text/javascript">

/***********************************************
* Translucent slideshow- (c) Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

</script>
<script src="js/banner.js" type="text/javascript">
</script>
    </head>
    <body >
    	<div id = 'background'>
            <div id='top-header'>
            	<div id='title'>                	
                <a href='http://localhost/anti-scam/index.php'>
                	<img src='images/siteName.png' />
                    </a>
                </div>
                <div id='buyer_seller'>
                </div>
                <div id='login_form'>
                <?php
				if((isset($_COOKIE['firstname'])))
				{
					$email_c = $_COOKIE['email'];
					$item_query = mysql_query("SELECT first_name FROM user WHERE email = '$email_c'") or die(mysql_error());  
					$row = mysql_fetch_assoc($item_query);
						$first_name_db = $row['first_name'];
					
					echo"<div id='header_logout'>
							<p>Welcome, 
								<a href='account.php'>$first_name_db</a>
							</p>
							<form action='logout.php'>
								<button type='submit' name='logout_button' class='button' id='button_logout'>Logout</button>
							</form>
						</div>
						
						";
				}
				else
				{
					echo"
						<form action='login.php' method='POST'>
							<table>
							  <tr>
								<td>Email:</td>
								<td> <input type='input' id='email_input' class='input' name='email' size='17' /></td>
								<td> <button type='sumbit' class='button button_header'  name='login_button'>Login</button></td>
							  </tr>
							  <tr>
								<td>Password:</td>
								<td><input type='password' id='password_input' class='input' name='password' size='17'/></td>
								<td>
								<a href='join.php' class='button button_header' id='button_join' name='join_button'>Join</a></td>
							  </tr>
							  <tr>
							  <td>
							  </td>
								<td>
									<a href='#'>Forgot password!</a>
								</td>
								<td>
								</td>
							  </tr>
							</table>
						</form>
						";
				}
                    ?>
                </div>
            </div>
            
            <div id='banner'>          
            </div>
        
        
        
