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
			<div id="accountPostsContent" class='accountContent'>
				<h1>Posts</h1>
				<div id='scrollbar_user_posts'>
					<div class='scrollbar'>
						<div class='track'>
							<div class='thumb'>
								<div class='end'></div>
							</div>
						</div>
					</div>
					<div class='viewport'>
						<div class='overview'>
							<div class="accountFormSize postsForm">
								<h2>My Post Title</h2>
								<div class="postsLikes">Likes:</div>
								<div class="postsAvoid">Avoid:</div>
								<div class="postsDate">Date:</div>
								<div class="postsStory"> asdfasdfssssssssssdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd </div>
								<div class="separatingLine"></div>
								<h2>My Post Title</h2>
								<div class="postsLikes">Likes:</div>
								<div class="postsAvoid">Avoid:</div>
								<div class="postsDate">Date:</div>
								<div class="postsStory"> asdfasdfssssssssssdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd </div>
								<div class="separatingLine"></div>

								<h2>My Post Title</h2>
								<div class="postsLikes">Likes:</div>
								<div class="postsAvoid">Avoid:</div>
								<div class="postsDate">Date:</div>
								<div class="postsStory"> asdfasdfssssssssssdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd </div>
								<div class="separatingLine"></div>

								<h2>My Post Title</h2>
								<div class="postsLikes">Likes:</div>
								<div class="postsAvoid">Avoid:</div>
								<div class="postsDate">Date:</div>
								<div class="postsStory"> asdfasdfssssssssssdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd </div>
								<div class="separatingLine"></div>

								<h2>My Post Title</h2>
								<div class="postsLikes">Likes:</div>
								<div class="postsAvoid">Avoid:</div>
								<div class="postsDate">Date:</div>
								<div class="postsStory"> asdfasdfssssssssssdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd </div>
								<div class="separatingLine"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="postsPageBar" class="pageBar">
				<div class="space"></div>
				<table class="table">
					<tr>
						<td><form method="post" class="forms" action="../report.php">
								<button class="button"> <!--onclick="location.href='../index.php'" for input type button-->
								<div class="toEnd">
									<div class="line floatL"></div>
									<div class="arrowLeft floatR"></div>
								</div>
								</button>
							</form></td>
						<td><form method="post" class="forms" action="../index.php">
								<button class="button">
								<div class="arrowLeft"></div>
								</button>
							</form></td>
						<td><div class="pageBarLine"></div></td>
						<td> Page
							<input type="number" placeholder="1" class="pageNumber"/>
							of 200 </td>
						<td><div class="pageBarLine"></div></td>
						<td><form method="post" class="forms" action="../index.php">
								<button class="button">
								<div class="arrowRight"></div>
								</button>
							</form></td>
						<td><form method="post" class="forms" action="../index.php">
								<button class="button">
								<div class="toEnd">
									<div class="line floatR"></div>
									<div class="arrowRight floatL"></div>
								</div>
								</button>
							</form></td>
						<td><div class="pageBarLine"></div></td>
						<td> Results 1-10 of 200 </td>
					</tr>
				</table>
			</div>
		</div>
		<?php include("right-content.php"); ?>
	</div>
	
	<!-- header -->
	<?php
	include("include/footer.php");
?>
