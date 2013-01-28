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
			<div class="linkBarBlue"> <a href="account.php">Overview</a> <a href="user_general.php">Profile</a> <a href="user_posts.php">Posts</a> <a href="user_comments.php">Comments</a> </div>
		</div>
		<div id='main-content' class='content'>
			<div class='contentHeader'>
				<div class='name_contentHeader'> My Name </div>
				<div class='date_contentHeader'> Member Since: 2012-02-12 </div>
				<div id='like_contentHeader'> Likes:100 </div>
			</div>
			<div class='accountContent'>
				<h1>Overview</h1>
				<div class="overviewForm accountFormSize">
					<h2>Community Stats</h2>
					<table>
						<tr>
							<td>Group
							<td>Member
						<tr>
							<td>Posts
							<td>9
						<tr>
							<td>Most Active In
							<td>Scams Reports
						<tr>
							<td>Member Title
							<td>Newbie
						<tr>
							<td>Profile Views
							<td>200
						<tr>
							<td>Age
							<td>21
						<tr>
							<td>Birthday
							<td>1991-01-11
						<tr>
							<td>Gender
							<td>Male
						<tr>
							<td>Interests
							<td><div class="interestClass">NothingNothing NothingNothingNothingNothingNothingNothing NothingNothingNothingNothi ngNothingNothingNothingNothingNothingNothingNothingN
									othing  NothingNothingNothingNothi ngNothingNothingNothingNot hingNothingNothingNothingNothingNoth ingNothingNothingNothingNoth ingNothingNothingNothingNothingNothingNothingNothingNoth
									ingNothingNothingNothingNothingNothingNothingNothingNothing</div>
					</table>
					<h2>Contact Information</h2>
					<table>
						<tr>
							<td>Email:
							<td>123@123.com
						<tr>
							<td>Phone:
							<td>123-123-1234
					</table>
				</div>
			</div>
		</div>
		<?php include("right-content.php"); ?>
	</div>
	
	<!-- header -->
	<?php
	include("include/footer.php");
?>