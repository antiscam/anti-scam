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
							<td><button type="submit" class="button_green account_updateButton" name="update">Update</button></td>
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