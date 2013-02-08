<!-- header -->
<?php
	include("include/header.php");
	include("function.php");
?>

<!------------------->
<!--write tips page-->
<!------------------->
<div id='full_content'>
	<?php include("left-menu.php"); ?>
    
	<div id="writeTips" class='content'>
		<h1>Write A Tip</h1>
		<form action="tip_preview.php" method="GET">
		<p>
		<input type='text' class='textbox report_textarea' name='tips_title' placeholder="My short tip/Title!">
		</p>
		<p>
		<textarea rows='5' cols='50' placeholder='Is there a story?' id='scroll' class='textbox report_textarea' name='tips_story'></textarea>
		</p>
		<button type="submit" id="writeTipSumbitButton" class="button_blue" name='writeTipSumbitButton'>Submit</button>
		</form>
	</div>
    
    <?php include("right-content.php"); ?>
</div>



<!------------>
<!-- footer -->
<!------------>
<?php
	include("include/footer.php");
?>

