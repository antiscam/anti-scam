<!-- header -->
<?php
	include("include/header.php");
	include("function.php");
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
		 signup();	 
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