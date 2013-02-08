<?php
	include("include/header.php");
?>

<!-- no variable in url -->
<?php
	if(!(isset($_GET['r_id'])))
	{
		header("location: index.php");
		exit();		
	}	
?>


<!---------->
<!-- MENU -->
<!---------->
<div id='full_content'>
	<?php include("left-menu.php"); ?>
    <?php include("post_content.php"); ?>
    <?php include("right-content.php"); ?>
</div>


<!-- header -->
<?php
	include("include/footer.php");
?>