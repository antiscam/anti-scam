<!--------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------ join.php  ---------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------->
<?php
/*********************
<!-- signup button -->
*********************/
function signup()
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
 
 
 

 
 
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------- Report.php  ----------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<?php
/*******************
<!-- scam button -->
*******************/
function scam_button()
{
	if(empty($_POST['scam_name']))
		{
			echo"enter scam name";
		}
		else if(empty($_POST['scam_story']))
		{
			echo" enter story";
		}
		else
		{
			$user_id_p = $_COOKIE['id'];
			$scam_name_p = $_POST['scam_name'];
			$scam_address_p = $_POST['scam_address'];
			$scam_city_p = $_POST['scam_city'];
			$scam_state_p = $_POST['scam_state'];
			$scam_country_p = $_POST['scam_country'];
			$scam_zipcode_p = $_POST['scam_zipcode'];
			$scam_phone = $_POST['scam_phone'];
			$scam_email_p = $_POST['scam_email'];
			$scam_text_p = $_POST['scam_story'];
			$category_p = $_POST['scam_category'];
			
			
			//add this product into the database now
			$sql = mysql_query("INSERT INTO report 
				(user_id, report_type, name, address, city, state, country, 
				zipcode, phone, email, story, category, like, dislike, num_replys, num_view, date)
						VALUES('$user_id_p', 'scam, '$scam_name_p', '$scam_address_p', '$scam_city_p', '$scam_state_p', '$scam_country_p', 
						'$scam_zipcode_p', '$scam_phone', '$scam_email_p', '$scam_text_p', '$category_p', '0', '0', '0', '0', 'now()')") 
							or die(mysql_error());
			
			//stop adding again when refresh
			header("location: report.php");	
			exit();
			
		}
}


function hoesty_button()
{
	if(empty($_POST['honesty_name']))
		{
			echo"enter honesty name";
		}
		else if(empty($_POST['honesty_story']))
		{
			echo" enter story";
		}
		else
		{
			$scam_name_p = $_POST['honesty_name'];
			$scam_address_p = $_POST['honesty_address'];
			$scam_city_p = $_POST['honesty_city'];
			$scam_state_p = $_POST['honesty_state'];
			$scam_country_p = $_POST['honesty_country'];
			$scam_zipcode_p = $_POST['honesty_zipcode'];
			$scam_phone = $_POST['honesty_phone'];
			$scam_email_p = $_POST['honesty_email'];
			$scam_text_p = $_POST['honesty_story'];
			$category_p = $_POST['honesty_category'];
			
			//add this product into the database now
			$sql = mysql_query("INSERT INTO report 
				(user_id, report_type, name, address, city, state, country, 
				zipcode, phone, email,story,category, like, dislike, num_replys, num_view, date)
						VALUES('$user_id_p', 'honesty_report', '$scam_name_p', '$scam_address_p', '$scam_city_p', '$scam_state_p', '$scam_country_p', 
						'$scam_zipcode_p', '$scam_phone', '$scam_email_p', '$scam_text_p', '$category_p', '0', '0', '0', '0', now())") or die(mysql_error());
			
			//stop adding again when refresh
			header("location: report.php");	
			exit();
		}
}
?>