<!-- Connect AND SEE IF ITS SESSION OR COOKIE -->
<?php
	include("connect.php");
?>


<!DOCTYPE html>
<html lang='en-GB'>
	<head>
    <meta charset="UTF-8" />
    	<title>Welcome</title>
        <script type = "text/javascript" src = "http://ssl.privacysafeguard.com/htmlpsg/scripts/chrome.js"></script>
         <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/css/header.css' />
         <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/css/content.css' />
         <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/css/footer.css' />
        
        <!------------------------------------Spry Panels--------------------------------------------> 
		<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
		<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
		<!----------------------------------------------------------------------------------------->
        <!--------------------------------- SCROLL BAR -------------------------------------------->
       <!----------------------------------------------------------------------------------------->
          <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/scrollbar example/css/scrollbars.css' />
             <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/scrollbar example/css/scrollbars-blue.css' />
                <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/scrollbar example/css/scrollbars-itunes.css' />
                
                
            
                
<!-- ******************************************************************************************-->
    </head>
    <body id='body'>
    	<div id = 'background'>
            <div id='top-header'>
            	<div id='title'>
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
        
        
        
