<!-- header -->
<?php
	include("include/header.php");
?>
	
	<!----------> 
	<!-- MENU --> 
	<!---------->
	<div id='full_content'>
		<div class='menu' id='accountMenu'>
			<div class='avatar'>
				<form action="changeAvatar" class='avatarHover'>
					Change
				</form>
			</div>
			<div class="linkBarBlue"> <a href="user_general.php">General</a> <a href="user_email_password.php">Email & Pawword</a> <a href="user_signature.php">Signature</a> <a href="user_notification.php">Notification</a> <a href="account.php">Back</a> </div>
		</div>
		<div id='main-content' class='content'>
			<div class='contentHeader'>
				<div class='name_contentHeader'> My Name </div>
				<div class='date_contentHeader'> Member Since: 2012-02-12 </div>
				<div id='like_contentHeader'> Likes:100 </div>
			</div>
			<div class='accountContent'>
				<h1>General</h1>
				<form action="gengeralUpdate" class="normalForm accountFormSize">
					<table>
						<tr>
							<td></td>
							<td></td>
							<td class="checkBoxWords">Visible to Everyone</td>
						</tr>
						<tr>
							<td class="cell">Photo</td>
							<td><button value="photo" id="changeAvatarButton"class="button_green">Change My Avatar</button></td>
							<td></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td><input type="tel" name="phone" placeholder="123-123-1234"></td>
							<td><input type="checkbox" name="phone_visible"></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><select name="gender">
									<option>Female</option>
									<option>Male</option>
									<option>Other</option>
								</select></td>
							<td><input type="checkbox" name="gender_visible"></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" name="address" placeholder="City,State,Country"></td>
							<td><input type="checkbox" name="address_visible"></td>
						</tr>
						<tr>
							<td>Interests</td>
							<td><textarea rows='5' cols='20'></textarea></td>
							<td><input type="checkbox" name="interests_visible"></td>
						</tr>
						<tr>
							<td></td>
							<td><button type="submit" id="updateButton" class="button_green" name="update">Update</button></td>
							<td></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<?php include("right-content.php"); ?>
	</div>
	
	<!-- header -->
	<?php
	include("include/footer.php");
?>