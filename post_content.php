<!------------------->
<!-- add comment -->
<!------------------>
<?php
	if(isset($_GET['r_id']))
	{
		$report_id_g = $_GET['r_id'];
		if(isset($_POST['add_comment']))
		{
			if((empty($_POST['comment'])))
				{
					echo"failer";
				}
				else
				{
					$from_id_c = $_COOKIE['id'];
					
					$comment_p = $_POST['comment'];
					$report_query_s = mysql_query("SELECT * FROM report WHERE report_id = $report_id_g")or die(mysql_error());  
					$row = mysql_fetch_assoc($report_query_s);
						$to_id_r = $row['user_id'];
			
					$comment_insert = mysql_query("INSERT INTO comment (to_id, from_id, report_id, comment, likes, dislike, date)
											VALUES('$to_id_r', '$from_id_c', '$report_id_g', '$comment_p', '0', '0', now())")
															 or die(mysql_error());
				//stop from adding double on refresh
				header("location: post.php?r_id=$report_id_g");
				exit();
				}
		}

	}
?>



<!------------------->
<!-- add likes  -->
<!------------------>
<?php
if(isset($_GET['r_id']) && isset($_GET['c_id']))
	{
		$report_id_g = $_GET['r_id'];
		$comment_id_g = $_GET['c_id'];
	
	$comment_query = mysql_query("SELECT * FROM comment WHERE  comment_id = $comment_id_g")or die(mysql_error());  
	$row = mysql_fetch_assoc($comment_query);
		$likes_db = $row['likes'];
		$u_likes_db = $likes_db + 1;
	
	$comment_update= mysql_query("UPDATE comment
				                 SET likes = '$u_likes_db'
                                    WHERE comment_id = $comment_id_g") or die(mysql_error());
		
	}
?>





<?php
if((isset($_GET['r_id'])))
{
	$r_id_g = $_GET['r_id'];
	
	$report_query = mysql_query("SELECT * FROM report WHERE report_id = $r_id_g")or die(mysql_error());  
	$row = mysql_fetch_assoc($report_query);
		$user_id_db = $row['user_id'];
		$report_type_db = $row['report_type'];
		$name_id_db = $row['name_id'];
		$name_db = $row['name'];
		$address_db = $row['address'];
		$city_db = $row['city'];
		$state_db = $row['state'];
		$country_db = $row['country'];
		$zipcode_db = $row['zipcode'];
		$phone_db = $row['phone'];
		$email_db = $row['email'];
		$story_db = $row['story'];
		$category_db = $row['category'];
		$likes_db = $row['likes'];
		$dislike_db = $row['dislike'];
		$num_replys_db = $row['num_replys'];
		$num_view_db = $row['num_view'];
		$date_db = $row['date'];
	
	$user_query = mysql_query("SELECT * FROM user WHERE user_id = $user_id_db")or die(mysql_error());  
	$row = mysql_fetch_assoc($user_query);
		$first_name_db = $row['first_name'];
		$last_name_db = $row['last_name'];
		
	
	//top menu
	echo"
	<div id='main-content' class='content'>
			<div id='searchContentHeader'>        
				<div class='title'><a href='search.php'>Search</a>>$report_type_db>$name_db </div>
				<div id='faceBook' class='postHeaderAdds'>
					fb
				</div>
				<div id='emailToFriend' class='postHeaderAdds'>
				 EM
				</div>            
			</div>
	";		
	
	
	echo"
			<div id='postContent'>
				<div id='postScrollbar'>
					<div class='scrollbar'><div class='track'><div class='thumb'><div class='end'></div></div></div></div>
					<div class='viewport'>
						<div class='overview'>                    
							<div class='reportedSotry'>";
								
								//top yellow box
								echo"
								<div class='postHead'>
									<div class='date'>
										 Posted at $date_db
									</div>
									<div class='avoid'>
										 <a class='clickToIncrease' href='#'>Avoid</a>:200 people!
										 <div id='avoidHover'>The number of people avoid the same scam!</div>
									</div>
								</div>"; //end of posthead div
								
								
								//person who posted the post - information
								echo"											   
								<div class='userInfo'>
									<div class='avatar'>                        
									</div>
									<div class='userName'>
										$first_name_db $last_name_db
									</div>
									<div class='userDecription'>
										descriptions
									</div>
								</div>";//end of userInfo div
								
								
								//Opponent's Information:
								echo"
								<div class='postContentRight'>
									<div class='postInfo'>
										<div class='opponentInfo'>
											<p>Opponent's Information:</p>
											<div class='name_'>Name: $name_db</div>
											<div class='address_'>Address: $address_db</div>
											<div class='phone_'>Phone: $phone_db</div>
											<div class='email_'>Email: $email_db</div>
											<div class='account_'>Acount: $name_id_db</div>
										</div>
										<div class='separatingLine'></div>
										<div class='story'>
											$story_db
										</div>
									</div>
								</div> ";//end of postcontentRight div
								
								
								//add comment
							if((isset($_COOKIE['firstname'])))
							{
								echo"
								<div id='comment' border='1px'>
									<form action='post.php?r_id=$r_id_g' method='POST'>
										 <textarea class='textarea' name='comment'></textarea>
										<button type='submit' id='reportButton' class='button reportButton' name='add_comment' >Reply</button>
									</form>
									</div>
								";
							}
							
							
							
							
							//display Comment
							$comment_query = mysql_query("SELECT * FROM comment WHERE report_id = '$r_id_g' ORDER BY comment_id DESC")
								or die(mysql_error());  
							while($row = mysql_fetch_assoc($comment_query))
							{
								$comment_id_db = $row['comment_id'];
								$to_id_db = $row['to_id'];
								$from_id_db = $row['from_id'];
								$comment_db = $row['comment'];
								$likes_c_db = $row['likes'];
								$dislike_c_db = $row['dislike'];
								$date_c_db = $row['date'];
								
								$user_from = mysql_query("SELECT * FROM user WHERE user_id = $from_id_db")or die(mysql_error());  
								$row = mysql_fetch_assoc($user_from);
									$first_f_name_db = $row['first_name'];
									$last_f_name_db = $row['last_name'];
		
								//add comment
								echo"<div class='user_comments'>";
									echo"<div class='separatingLine' style='clear:both;'></div>";
									echo"
									<div class='postHead'>                            
										<div class='date'>
											 Posted at $date_c_db
										</div>      
										<div class='avoid'>
											<a href='post.php?r_id=$r_id_g&c_id=$comment_id_db' class='clickToIncrease' id='post_comment_like' 
												name='post_comment_like'>Likes:</a>$likes_c_db
										</div>
									</div>"; //end of postHead div
									
									echo"
										<div class='userInfo'>
										<div class='avatar'>                        
										</div>
										<div class='userName'>
											$first_f_name_db $last_f_name_db 
										</div>
										<div class='userDecription'>
											descriptions
										</div>
									</div>";  //end of userInfo div
									
									//display comment 
									echo"<div class='postContentRight'>
											<div class='comments'>$comment_db</div>
										</div>";//end of postContentRight div
									
								echo"</div>"; //end of user_comments div
							}
			
						echo"</div>"; //end of reportedsotry div
					echo"</div>"; //end of overview div
				echo"</div>"; //end of viewport div
			echo"</div>";	//end of postScrollbar div			
		echo"</div>";	//end of post content	div			
	echo"</div>"; //end of main-conent div
}
?>



<!--1nd comment
							<div class='user_comments'>
								<div class='separatingLine' style='clear:both;'></div>
								<div class='postHead'>                            
									<div class='date'>
										 Posted at 19 February 2006 - 07:30 PM
									</div>      
									<div class='avoid'>
										<a class='clickToIncrease' href='#'>Likes:</a>200
									</div>
								</div>
								<div class='userInfo'>
									<div class='avatar'>                        
									</div>
									<div class='userName'>
										myName
									</div>
									<div class='userDecription'>
										descriptions
									</div>
								</div>
								<div class='postContentRight'>
									<div class='comments'>Here is the commentHere is the commentHere is the commentHere is the comment</div>
								</div>
							</div>
							-->