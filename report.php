<!-- header -->
<?php
	include("include/header.php");
?>


<!----------------->
<!-- scam button -->
<!----------------->
<?php
	if(isset($_POST['button_scam']))
	{
		if(empty($_POST['scam_story']))
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
			$sql = mysql_query("INSERT INTO scam_report 
			(user_id, name, address, city, state, country, zipcode, phone, email,story,category, scam_add_date)
						VALUES('$user_id_p', '$scam_name_p', '$scam_address_p', '$scam_city_p', '$scam_state_p', '$scam_country_p', 
						'$scam_zipcode_p', '$scam_phone', '$scam_email_p', '$scam_text_p', '$category_p', now())") or die(mysql_error());
			
			//stop adding again when refresh
			header("location: report.php");	
			exit();
			
		}
	}
	
			
?>






<!----------------->
<!-- scam button -->
<!----------------->
<?php
	if(isset($_POST['button_honesty']))
	{
		if(empty($_POST['honesty_story']))
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
		}
	}
?>





<!----------------->
<!-- report page -->
<!----------------->
<div id='full_content'>
	<?php include("left-menu.php"); ?>
    
	<?php include('report-content.php'); ?>
    
    <?php include("right-content.php"); ?>
</div>



<!------------>
<!-- footer -->
<!------------>
<?php
	include("include/footer.php");
?>

