<!-- header -->
<?php
	session_start(); //for errors
	include("include/header.php");
	include("function.php");
?>


<!----------------->
<!-- scam button -->
<!----------------->
<?php
	
	
	if(isset($_POST['button_scam']))
	{
		$error_class = "";
		scam_button($error_class);
	}
?>



<!-------------------->
<!-- Honesty button -->
<!-------------------->
<?php
	if(isset($_POST['button_honesty']))
	{
		hoesty_button();
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

