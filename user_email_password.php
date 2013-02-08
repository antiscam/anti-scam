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
			<div id="account_email_password" class='accountContent'>
				<h1>Email & Passowrd</h1>
				<div id='scrollbar_email_password'>
					<div class='scrollbar'>
						<div class='track'>
							<div class='thumb'>
								<div class='end'></div>
							</div>
						</div>
					</div>
					<div class='viewport'>
						<div class='overview'>
							<form action="email&passwordUpdate" class="normalForm accountFormSize">
								<p>If you do not wish to change your password/email just leave the section blank.</p>
								<h2>Email</h2>
								<table>
									<tr>
										<td>Current Email Address
										<td><input type="email">
									<tr>
										<td>New Email Address
										<td><input type="email">
									<tr>
										<td>Confirm Email Address
										<td><input type="email">
									<tr>
										<td>Current Passwords
										<td><input type="password">
								</table>
								<h2>Passwords</h2>
								<p>Your password's length must be at least 6. </p>
								<table>
									<tr>
										<td>Current Passowrd
										<td><input type="password">
									<tr>
										<td>New Passowrd
										<td><input type="password">
									<tr>
										<td>Confirm Passowrd
										<td><input type="password">
								</table>
								<button type="submit" id="email_password_button" class="button_green account_updateButton">Update</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("right-content.php"); ?>
	</div>
	
	<!-- header -->
	<?php
	include("include/footer.php");
?>