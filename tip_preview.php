<!-- header -->
<?php
	include("include/header.php");
	include("function.php");
?>

<!----------------------------------->
<!---------- no url variable --------->
<!------------------------------------->	
<?php
if(!(isset($_GET['tips_title'])) || !(isset($_GET['tips_story'])))
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
		<?php include("tip_preview_content.php"); ?>
		<?php include("right-content.php"); ?>
	</div>
	
    
<!-- footer -->
	<?php
	include("include/footer.php");
?>