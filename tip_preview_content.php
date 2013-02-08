<!-------------->
<!---- post ----->
<!--------------->
<?php
	
if(isset($_POST['post_preview_NextButton']))
{
	store_tip_db();
}
?>



<?php
if(isset($_GET['writeTipSumbitButton']))
{
	$tip_title_p = $_GET['tips_title'];
	$tip_story_p = $_GET['tips_story'];

echo"
<div id='main-content' class='content'>
			<div class='contentHeader'>
				<div class='space'></div>				<div class='space'></div>
				<div id='post_preview_header'>Tip Preview</div>
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
							<div id='post_previewStory' class='reportedSotry'>
							<div id='post_preview_title' class='title'>Your Title: $tip_title_p</div>
								<div id='post_preview_userInfo' class='userInfo'>
									<div class='avatar'> </div>
									<div class='userName'> myName </div>
									<div class='userDecription'> descriptions </div>
								</div>
								<div class='postContentRight'>
									<div class='postInfo'>									
										<div class='separatingLine'></div>
										<div class='story'> $tip_story_p </div>
									</div>
								</div>
							</div>						
							<form action='tip_preview.php?tips_title=$tip_title_p&tips_story=$tip_story_p' method='POST'>
								<button id='post_preview_NextButton' class='button_green account_updateButton' name='post_preview_NextButton'>
									Post
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		";
}
?>