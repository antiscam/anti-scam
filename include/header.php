<!-- Connect AND SEE IF ITS SESSION OR COOKIE -->
<?php
session_start();
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
         
<!-- ******************************************************************************************-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="http://threedubmedia.googlecode.com/files/jquery.event.drag-2.0.min.js"></script>
		<script src="http://github.com/cowboy/jquery-resize/raw/v1.1/jquery.ba-resize.min.js"></script>
		<script src="http://remysharp.com/demo/mousehold.js"></script>
		<script src="https://raw.github.com/brandonaaron/jquery-mousewheel/master/jquery.mousewheel.js"></script>
		
        
		<script src="js/aplweb.scrollbars.js"></script>

		<script>
			$(document).ready(function() {
				$("#scroll").scrollbars();
			});
		</script>
        
        <!--
         <link rel="stylesheet" type="text/css" href="css/scrollbars.css" />

		<link rel="stylesheet" type="text/css" href="css/scrollbars-blue.css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.event.drag-2.0.min.js"></script>
		<script src="js/jquery.ba-resize.min.js"></script>
		<script src="js/mousehold.js"></script>
		<script src="js/jquery.mousewheel.js"></script>
		
		<script src="js/aplweb.scrollbars.js"></script>

		<script>
			$(document).ready(function() {
				$(".scroll").scrollbars();
			});
		</script>
-->        
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
				if((isset($_SESSION['email'])))
				{
					$email_s = $_SESSION['email'];
					$item_query = mysql_query("SELECT first_name FROM user WHERE email = '$email_s'") or die(mysql_error());  
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
        
        
        
