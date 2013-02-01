<!--------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------ join.php  ---------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------->
<?php
/*********************
<!-- signup button -->
*********************/
function signup()
{
	$error_class_first=""; $error_class_last=""; $error_class_email=""; $error_class_re_email=""; $error_class_password=""; $error_class_re_password="";
	
		 if(empty($_POST['first_name_input']))
		 {
			// echo "Missing field! Please fill in  all field! first name";
			 $error_class_first = "errorClass"; 
		 }
		  else if(empty($_POST['last_name_input']))
		 {
			 //echo "Missing field! Please fill in  all field! last name";
			  $error_class_last = "errorClass"; 
		 }
		else if(empty($_POST['email_input'])) 
		{
			 //echo "Missing field! Please fill in  all field!";
			 $error_class_email = "errorClass";
		}
		else if(empty($_POST['re_email_input'])) 
		 {
			 //echo "Missing field! Please fill in  all field!";
			 $error_class_re_email = "errorClass";
		} 
		else if(empty($_POST['password_input'])) 
		{
			 //echo "Missing field! Please fill in  all field!";
			$error_class_password = "errorClass";
		}
		else if(empty($_POST['re_password_input']))
		{
			 //echo "Missing field! Please fill in  all field!";
			$error_class_re_password = "errorClass";  
		}
		else if(empty($_POST['gender']))
		{
				//echo "Missing field! Please fill in  all field!";
		}
		 else if((strlen($_POST['first_name_input']) < 2))
		{
			//echo "Error - first name is too short!";
			$error_class_first = "errorClass";
		}
		else if((strlen($_POST['last_name_input']) < 2))
		{
			//echo "Error - last name is too short!";
			$error_class_last = "errorClass";
		}
		else if((strlen($_POST['email_input']) < 4))
		{
			//echo"Error - email is too short!";
			$error_class_email = "errorClass";
		}
		else if((strlen($_POST['password_input']) < 6))
		{
			//echo"Error - password is too short!";
			$error_class_password = "errorClass";
		}
		else if((strlen($_POST['first_name_input']) >= 50))
		{
			//echo "Error - first name is too long!";
			$error_class_first = "errorClass";
		}
		else if((strlen($_POST['last_name_input']) >= 50))
		{
			//echo "Error - last name is too long!";
				$error_class_last = "errorClass";
		}
		else if((strlen($_POST['email_input']) >= 30))
		{
			//echo "Error - email is too long!";
			$error_class_email = "errorClass";
		}
		else if((strlen($_POST['password_input']) >= 50))
		{
			//echo "Error - password is too long!";
			$error_class_password = "errorClass";
		}
		else if(($_POST['email_input'] != $_POST['re_email_input']))
		{
			//echo"Email do not match!";
			$error_class_email = "errorClass";
			$error_class_re_email = "errorClass";
		}
		else if(($_POST['password_input'] != $_POST['re_password_input']))
		{
				//echo" Password do not match!";
				$error_class_password = "errorClass";
				$error_class_re_password = "errorClass";
		}
		else if((!preg_match("/[a-zA-Z0-9-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", $_POST['email_input']) > 0))
		{
			//echo"Invalid e-mail address";
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
				
				$register = mysql_query("INSERT INTO user (avatar_folder_name, avatar_user_name, first_name, last_name, email, password, gender, user_date)
												VALUES('', '', '$first_name_p', '$last_name_p', '$email_p', '$password_p', '$gender_p', 'now()')")
													 or die(mysql_error());
				echo "Accont has been created!";
			}
		}
		
		$_SESSION['error_class_first'] = $error_class_first;
		$_SESSION['error_class_last'] = $error_class_last;
		$_SESSION['error_class_email'] = $error_class_email;
		$_SESSION['error_class_re_email'] = $error_class_re_email;
		$_SESSION['error_class_password'] = $error_class_password;
		$_SESSION['error_class_re_password'] = $error_class_re_password;
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
	 if(empty($_POST['scam_story']))
		{
			echo" enter story";
		}
		else
		{
			$user_id_p = $_COOKIE['id'];
			$scam_name_p = $_POST['scam_name'];
			$scam_id_p = $_POST['scam_id'];
			$scam_address_p = $_POST['scam_address'];
			$scam_city_p = $_POST['scam_city'];
			$scam_state_p = $_POST['scam_state'];
			$scam_country_p = $_POST['scam_country'];
			$scam_zipcode_p = $_POST['scam_zipcode'];
			$scam_phone = $_POST['scam_phone'];
			$scam_email_p = $_POST['scam_email'];
			$scam_text_p = $_POST['scam_story'];
			$scam_category_p = $_POST['scam_category'];
			
			//add this product into the database now
			$sql = mysql_query("INSERT INTO report 
				(user_id, report_type, name, name_id, address, city, state, country, zipcode, phone, email, story, category, likes,
				 dislike,num_replys, num_view, date)
						VALUES('$user_id_p', 'scam', '$scam_name_p', '$scam_id_p', '$scam_address_p', '$scam_city_p', '$scam_state_p', 
						'$scam_country_p', '$scam_zipcode_p', '$scam_phone', '$scam_email_p', '$scam_text_p', '$scam_category_p', '0', '0', '0', '0', now())")
								 or die(mysql_error());
		
			echo "every thing is ok";
//stop from adding double on refresh
header("location: report.php");
exit();
		}
		

}


function hoesty_button()
{
	 if(empty($_POST['honesty_story']))
		{
			echo" enter story";
		}
		else
		{
			$user_id_p = $_COOKIE['id'];
			$honesty_name_p = $_POST['honesty_name'];
			$honesty_id_p = $_POST['honesty_id'];
			$honesty_address_p = $_POST['honesty_address'];
			$honesty_city_p = $_POST['honesty_city'];
			$honesty_state_p = $_POST['honesty_state'];
			$honesty_country_p = $_POST['honesty_country'];
			$honesty_zipcode_p = $_POST['honesty_zipcode'];
			$honesty_phone_p = $_POST['honesty_phone'];
			$honesty_email_p = $_POST['honesty_email'];
			$honesty_text_p = $_POST['honesty_story'];
			$honesty_category_p = $_POST['honesty_category'];
			
			//add this product into the database now
			$sql = mysql_query("INSERT INTO report 
				(user_id, report_type, name, name_id, address, city, state, country, zipcode, phone, email, story, category, likes, dislike, 
				num_replys, num_view, date)
						VALUES('$user_id_p', 'honesty', '$honesty_name_p', '$honesty_id_p', '$honesty_address_p', '$honesty_city_p', '$honesty_state_p',
						'$honesty_country_p', '$honesty_zipcode_p', '$honesty_phone_p', '$honesty_email_p', '$honesty_text_p', '$honesty_category_p',
						 '0', '0', '0', '0', now())")
								 or die(mysql_error());
			
			//stop adding again when refresh
			header("location: report.php");	
			exit();
		}
}
?>







<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------- SEARCH.php  ----------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<?php
function set_up_pagination(&$item_per_page, &$page_query, &$pages, &$page, &$start, $types_p, $category_p, $keyword_p)
{
	/*** SET UP pagination  ***/ 
		$item_per_page = 10; 
		if($types_p == 'All')
	{
			$page_query = mysql_query("SELECT COUNT('id') FROM report WHERE (category = '$category_p') && (name_id LIKE '%$keyword_p%' || name LIKE '%$keyword_p%' || address LIKE '%$keyword_p%' || city LIKE '%$keyword_p%' || state LIKE '%$keyword_p%' || country LIKE '%$keyword_p%' || zipcode LIKE '%$keyword_p%' || phone LIKE '%$keyword_p%' || email LIKE '%$keyword_p%' || story LIKE '%$keyword_p%' )") 
	or die(mysql_error());  
	}
	else
	{
		$page_query = mysql_query("SELECT COUNT('id') FROM report WHERE (report_type LIKE '%$types_p%' && category = '$category_p') && (name_id LIKE '%$keyword_p%' || name LIKE '%$keyword_p%' || address LIKE '%$keyword_p%' || city LIKE '%$keyword_p%' || state LIKE '%$keyword_p%' || country LIKE '%$keyword_p%' || zipcode LIKE '%$keyword_p%' || phone LIKE '%$keyword_p%' || email LIKE '%$keyword_p%' || story LIKE '%$keyword_p%') ") 
	or die(mysql_error());  
	}	
	
		$pages = ceil(mysql_result($page_query, 0) / $item_per_page); //print only 8 reco per page
		//if top variable is set ex: page = 4 --> user cant change in url --> i user go to index set page =1  
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start= ($page - 1) * $item_per_page;
}
?>




