<!-- header -->
<?php
	include("include/header.php");
	include("function.php");
?>


<!----------------->
<!-- scam button -->
<!----------------->
<?php
	
	if(isset($_POST['search']))
	{
		//search();
	}
?>



<!----------------->
<!------ BODY  ---->
<!----------------->
<div id='full_content'>
	<?php include('search-menu.php'); ?>
    <?php include('search-content.php'); ?>
    <?php include("right-content.php"); ?>
</div>


<!-- header -->
<?php
	include("include/footer.php");
?>