<!-- header -->
<?php
	include("include/header.php");
?>


 <!-- USER HAS TO BE LOGED IN -->
<?php
 if((isset($_COOKIE['firstname']))) /*** HAS TO BE LOGED IN ***/
	{
		header("location: index.php");	
		exit();
	}
?>


 <!-- SUBMIT BUTTON -->
<?php 
	if(isset($_POST['signup'])) //if user hit submit button 
	 {
		 if((empty($_POST['first_name_input'])) || (empty($_POST['last_name_input'])) || (empty($_POST['email_input'])) || empty($_POST['re_email_input']) || empty($_POST['password_input']) || empty($_POST['re_password_input']) || empty($_POST['gender']))
		{
			echo "Missing field! Please fill in  all field!";
		}
		else if((strlen($_POST['first_name_input']) < 2))
		{
			echo "Error - first name is too short!";
		}
		else if((strlen($_POST['last_name_input']) < 2))
		{
			echo "Error - last name is too short!";
		}
		else if((strlen($_POST['email_input']) < 4))
		{
			echo"Error - email is too short!";
		}
		else if((strlen($_POST['password_input']) < 6))
		{
			echo"Error - password is too short!";
		}
		else if((strlen($_POST['first_name_input']) >= 50))
		{
			echo "Error - first name is too long!";
		}
		else if((strlen($_POST['last_name_input']) >= 50))
		{
			echo "Error - last name is too long!";
		}
		else if((strlen($_POST['email_input']) >= 30))
		{
			echo "Error - email is too long!";
		}
		else if((strlen($_POST['password_input']) >= 50))
		{
			echo "Error - password is too long!";
		}
		else if(($_POST['email_input'] != $_POST['re_email_input']) || ($_POST['password_input'] != $_POST['re_password_input']))
		{
			echo"Email or Password do not match!";
		}
		else if((!preg_match("/[a-zA-Z0-9-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", $_POST['email_input']) > 0))
		{
			echo"Invalid e-mail address";
		}
		else
		{
			$first_name_p = $_POST['first_name_input'];
			$last_name_p = $_POST['last_name_input'];
			$email_p = $_POST['email_input'];
			$re_email_p = $_POST['re_email_input'];
			$password_p = $_POST['password_input'];
			$re_password_p = $_POST['re_password_input'];
			$gender_p = $_POST['gender'];
		
			//check for existing email??????????????????
			$query = mysql_query("Select * FROM user WHERE email = '$email_p'");		
			if(mysql_num_rows($query) >= 1)
			{
				echo"That email is already taken";
			}
			else
			{
				
				$register = mysql_query("INSERT INTO user (first_name, last_name, email, password, gender, user_date)
												VALUES('$first_name_p','$last_name_p','$email_p','$password_p',  '$gender_p', 'now()')") or die(mysql_error());
				echo "Accont has been created!";
			}
		}
	 }
?>

<!---------->
<!-- MENU -->
<!---------->
<div id='full_content'>
	<?php include("left-menu.php"); ?>
    <div class='content form-content'>
    	<div class='form'>
            <h1>SIGN UP</h1>
            <h2>IT'S FREE</h2>
            <form action='join.php' method='POST'>
                <p>
                    <input type='field' placeholder='My First Name'  id='first-name-field' class='textbox' name='first_name_input' 
                    	value="<?php if(isset($_POST['first_name_input'])){echo htmlentities($_POST['first_name_input']);}?>" />
                    <input type='field' placeholder='My Last Name' id='last-name-field' class='textbox' name='last_name_input'
                         value="<?php if(isset($_POST['last_name_input'])){echo htmlentities($_POST['last_name_input']);}?>"/>
                </p>
                <p>
                    <input type='field' placeholder='My Email Address' id='email-field' class='textbox text-box-spec' name='email_input'
                          value="<?php if(isset($_POST['email_input'])){echo htmlentities($_POST['email_input']);}?>"/>
                </p>
                <p>
                    <input type='field' placeholder='Retype Email Address' id='retype-email-field' class='textbox text-box-spec' name='re_email_input'/>
                </p>
                <p>
                    <input type='password' placeholder='My Password' id='password-field' class='textbox text-box-spec' name='password_input' />
                </p>
                <p>
                    <input type='password' placeholder='Retype My Password' id='retype-password-field' class='textbox text-box-spec' name='re_password_input'/>
                </p>
                <p>
                    <input type="radio" id='femaler-radio' class='radio' name="gender"  value="female"> <label>Female</label>
                    <input type="radio" id='male-radio' class='radio' name="gender"  value="male"> <label>Male</label>
               </p> 
               <p>
                    By clicking Sing Up, you agree to our <a href='#'>Terms</a> and that you have read our <a href='#'>Anti-Scam Policy					
                    </a>
               </p>
               <p>
                    <button type="submit" class='button' id='button_signup' name="signup" >Sign Up</button>
               </p>  
            </form>
        </div>
    </div>
    <?php include("right-content.php"); ?>
</div>


<!-- header -->
<?php
	include("include/footer.php");
?>