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
<style>
.errorClass{
 border: solid 1px red;
}
.defaultClass{
/*defaults*/
border: 1px solid white;
}
</style>


 <!-- SUBMIT BUTTON -->
<?php 
	if(isset($_POST['signup'])) //if user hit submit button 
	 {
		 $join_error_class = "";
		 
		 if(empty($_POST['first_name_input']))
		 {
			 echo "Missing field! Please fill in  all field! first name";
			 $error_class_first = "errorClass"; 
		 }
		 else if(empty($_POST['last_name_input']))
		 {
			 echo "Missing field! Please fill in  all field! last name";
			  $error_class_last = "errorClass"; 
		 }
		  else if((empty($_POST['email_input'])) || (empty($_POST['re_email_input'])) || (empty($_POST['password_input'])) || (empty($_POST['re_password_input'])))
		 {
			 echo "Missing field! Please fill in  all field!";
			 $error_class_email = "errorClass";
			 $error_class_re_email = "errorClass";
			$error_class_password = "errorClass";
			$error_class_re_password = "errorClass";  
		} 
		else if(empty($_POST['gender']))
		{
				echo "Missing field! Please fill in  all field!";
		}
		else if((strlen($_POST['first_name_input']) < 2))
		{
			echo "Error - first name is too short!";
			$error_class_first = "errorClass";
		}
		else if((strlen($_POST['last_name_input']) < 2))
		{
			echo "Error - last name is too short!";
			$error_class_first = "errorClass";
		}
		else if((strlen($_POST['email_input']) < 4))
		{
			echo"Error - email is too short!";
			$error_class_email = "errorClass";
		}
		else if((strlen($_POST['password_input']) < 6))
		{
			echo"Error - password is too short!";
			$error_class_password = "errorClass";
		}
		else if((strlen($_POST['first_name_input']) >= 50))
		{
			echo "Error - first name is too long!";
			$error_class_first = "errorClass";
		}
		else if((strlen($_POST['last_name_input']) >= 50))
		{
			echo "Error - last name is too long!";
				$error_class_last = "errorClass";
		}
		else if((strlen($_POST['email_input']) >= 30))
		{
			echo "Error - email is too long!";
			$error_class_email = "errorClass";
		}
		else if((strlen($_POST['password_input']) >= 50))
		{
			echo "Error - password is too long!";
			$error_class_password = "errorClass";
		}
		else if(($_POST['email_input'] != $_POST['re_email_input']))
		{
			echo"Email do not match!";
			$error_class_email = "errorClass";
			$error_class_re_email = "errorClass";
		}
		else if(($_POST['password_input'] != $_POST['re_password_input']))
		{
				echo" Password do not match!";
				$error_class_password = "errorClass";
				$error_class_re_password = "errorClass";
		}
		else if((!preg_match("/[a-zA-Z0-9-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", $_POST['email_input']) > 0))
		{
			echo"Invalid e-mail address";
			$error_class_email = "errorClass";
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
    
    <?php include("join_content.php"); ?>
    
    <?php include("right-content.php"); ?>
</div>


<!-- header -->
<?php
	include("include/footer.php");
?>