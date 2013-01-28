<!-- header -->
<?php
	include("include/header.php");
?>
	
	<!----------> 
	<!-- MENU --> 
	<!---------->
	<div id='full_content'>
		<div class='menu' id='accountMenu'>
			<?php include("account_menu_avatar.php");?>
			<?php include("account_profile_menu.php");?>
		</div>
		<div id='main-content' class='content'>
			<?php include("account_contentHeader.php");?>
			<div class='accountContent'>
				<h1>Signature</h1>
				<form action="gengeralUpdate" class="normalForm accountFormSize">
					<h2>My Current Signature</h2>
						<div class="textbox signatureTextBox"> Here is my Signature</div>
					<h2>Edit Signature</h2>
					<textarea rows='5' cols='20' id="signatureEdit" class="textbox signatureTextBox" name="user_signature" placeholder="My new signature."></textarea> 
					<button type="submit" id="email_password_button" class="button_green account_updateButton" name="update">Update</button>
				</form>
			</div>
		</div>
		<?php include("right-content.php"); ?>
	</div>
	
	<!-- header -->
	<?php
	include("include/footer.php");
?>