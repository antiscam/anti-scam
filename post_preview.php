<!-- header -->
<?php
	include("include/header.php");
?>
	
	<!----------> 
	<!-- MENU --> 
	<!---------->
	<div id='full_content'>
		<?php include("left-menu.php"); ?>
		<div id='main-content' class='content'>
			<div class='contentHeader'>
				<div class="space"></div>				<div class="space"></div>
				<div id="post_preview_header">Post Preview</div>
			</div>
			<div id='postContent'>
				<div id='postScrollbar'>
					<div class='scrollbar'>
						<div class='track'>
							<div class='thumb'>
								<div class='end'></div>
							</div>
						</div>
					</div>
					<div class='viewport'>
						<div class='overview'>
							<div id="post_previewStory" class='reportedSotry'>
								<div id='post_preview_title' class='title'>Your Title: My Title</div>
								<div class='userInfo' id='post_preview_userInfo'>
									<div class='avatar'> </div>
									<div class='userName'> myName </div>
									<div class='userDecription'> descriptions </div>
								</div>
								<div class='postContentRight'>
									<div class='postInfo'>
										<div class='opponentInfo'>
											<p>Opponent's Information:</p>
											<div class='name_'>Name:</div>
											<div class='address_'>Address:</div>
											<div class='phone_'>Phone:</div>
											<div class='email_'>Email:</div>
											<div class='account_'>Acount:</div>
										</div>
										<div class="separatingLine"></div>
										<div class='story'> Her is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is wh </div>
									</div>
								</div>
							</div>							
							<button id="post_preview_NextButton" class="button_green account_updateButton">
								Post
							</button>
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