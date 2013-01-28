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
				<h1>Notification</h1>
				<form action="gengeralUpdate" id="notifyTable" class="normalForm accountFormSize">
					<table>
						<tr>
							<td>Notify me when</td>
							<td>Notify List</td>
							<td>Email</td>
							<td>Phone</td>
						</tr>
						<tr>
							<td class="notify_rows">someone likes my post</td>
							<td><input type="checkbox" name="nListCheckBox_like"></td>
							<td><input type="checkbox" name="emailCheckBox_like"></td>
							<td><input type="checkbox" name="phoneCheckBox_like"></td>
						</tr>
						<tr>
							<td class="notify_rows">someone followed my post</td>
							<td><input type="checkbox" name="nListCheckBox_follow"></td>
							<td><input type="checkbox" name="emailCheckBox_follow"></td>
							<td><input type="checkbox" name="phoneCheckBox_follow"></td>
						</tr>
						<tr>
							<td class="notify_rows">someone avoided scam by my report</td>
							<td><input type="checkbox" name="nListCheckBox_avoid"></td>
							<td><input type="checkbox" name="emailCheckBox_avoid"></td>
							<td><input type="checkbox" name="phoneCheckBox_avoid"></td>
						</tr>
						<tr>
							<td class="notify_rows">there are updates to my followed posts</td>
							<td><input type="checkbox" name="nListCheckBox_updates"></td>
							<td><input type="checkbox" name="emailCheckBox_updates"></td>
							<td><input type="checkbox" name="phoneCheckBox_updates"></td>
						</tr>
						<tr>
							<td><button type="submit" id="notifyButton" class="button_green account_updateButton">Updates</button></td>
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