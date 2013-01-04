<!-- Connect AND SEE IF ITS SESSION OR COOKIE -->
<?php
session_start();
	include("connect.php");
?>


<!DOCTYPE html>
<html lang='en'>
	<head>
    	<title>Welcome</title>
         <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/css/header.css' />
         <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/css/content.css' />
         <link rel='stylesheet' type='text/css' href='http://localhost/anti-scam/css/footer.css' />
    </head>
    <body>
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
								<td> <button type='sumbit' class='button' name='login_button'>Login</button></td>
							  </tr>
							  <tr>
								<td>Password:</td>
								<td><input type='password' id='password_input' class='input' name='password' size='17'/></td>
								<td><button type='sumbit' class='button' name='join_button'>Join</button></td>
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
        
        
        
