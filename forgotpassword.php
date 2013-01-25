<!-- header -->
<?php
	include("include/header.php");
?>


<!-- header -->
<?php
	include("include/header.php");
	include("function.php");
?>




<!-- WHEN USE HIT "SUMBIT EMAIL" Button on form -->
<?php
	if(isset($_POST['forgot_button']))  
	{	
		$email_p = $_POST['email']; 
		$forgot_error = "";
		
		//check errors
		if(empty($email_p)) 
		{
			$forgot_error .= "Error - Enter your email address";
			echo "$forgot_error";
		}
		else if(!(filter_var($email_p, FILTER_VALIDATE_EMAIL)))   // else if(preg_match("/[a-zA-Z0-9]@[a-zA-Z0-9].[a-zA-Z]/", $email_p) < 0) 
		{
			$forgot_error .= "Invalid e-mail address";
			echo"$forgot_error";
		}
		else
		{
			//get email from database
			$user_query = mysql_query("SELECT * FROM user WHERE email = '$email_p'");
			$row = mysql_fetch_assoc($user_query);	
			$email_db = $row['email']; 
		
			//check email == database email match
			if($email_p != $email_db)
			{
				$forgot_error .= "There is no user by that name";
			}
			else
			{
				
				$first_name_db = $row['first_name'];   //get user name from table	
				$last_name_db = $row['last_name']; //get user name from table
				$password_db = $row['password'];   //old_passworrddb = get from table
				
				$webmaster = "anti0scams@gmail.com";
				$headers = "From: $webmaster";
				$subject = "Forgot password";
				$message = "Hello $first_name_db $last_name_db,<br/><br/>
								Your password is <u>$password_db</u><br/><br/>
									Thanks,<br/>Anti0Scams";
				if(mail($email_p, $subject, $message, $headers))
				{
					echo"email has been sent!";
				}
				else
				{
					echo"problem sending the email";
				}
			}
		}
		//$_SESSION['forgot_error'] = $forgot_error;
	
	}
?>


<!---------->
<!-- MENU -->
<!---------->
<div id='full_content'>
	<?php include("left-menu.php"); ?>
    
    <div id='main-content' class='content'>
	    <div id='forgotP' class="center">
            <h1 class="boxShadow">Forgot Password</h1>
            <div class="main_content_area">
            <p>Please provide your email below.</p><p> We will send your password to the provided email.</p>
            <p><input type="email" placeholder="My Email is" class="textbox"></p>
            <button type="submit" id="button_forgotP" class="button reportButton">Enter</button>
            <p>Can't find the email? Check your Spam Folder!</p>
            </div>
        </div>
    </div>
    
    <?php include("right-content.php"); ?>
</div>



<!-- header -->
<?php
	include("include/footer.php");
?>