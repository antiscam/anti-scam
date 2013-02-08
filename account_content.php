<?php
if(isset($_COOKIE['id']))
{
	$user_id_c = $_COOKIE['id'];
	$user_select_query = mysql_query("SELECT * FROM user WHERE user_id = '$user_id_c'") or die(mysql_error());
	$row = mysql_fetch_assoc($user_select_query);
		$avatar_folder_name_p = $row['avatar_folder_name'];
		$avatar_user_name_p = $row['avatar_user_name'];
		$first_name_p = $row['first_name'];
		$last_name_p = $row['last_name'];
		$email_p = $row['email'];
		$gender_p = $row['gender'];
		$address_p = $row['address'];
		$interest_p = $row['interest'];
		$user_date_p = $row['user_date'];
		
		$report_query = mysql_query("SELECT * FROM report WHERE user_id = $user_id_c && report_type = 'scam'")or die(mysql_error());  
		$report_scam_row_count = mysql_num_rows($report_query);
		
		$report_query = mysql_query("SELECT * FROM report WHERE user_id = $user_id_c && report_type = 'honesty'")or die(mysql_error());  
		$report_honesty_row_count = mysql_num_rows($report_query);
		
		$tip_query = mysql_query("SELECT * FROM tip1 WHERE user_id = $user_id_c")or die(mysql_error());  
		$tip_row_count = mysql_num_rows($tip_query);
		
		$total_post = $report_scam_row_count + $report_honesty_row_count +$tip_row_count;
		
		
		
		if($report_scam_row_count > $report_honesty_row_count)
		{
			 if($report_scam_row_count > $tip_row_count)
			{
				$active = "scam_report";
			}
			else
			{
				$active = "write_tip";
			}
		}
		else if($report_honesty_row_count > $tip_row_count)
		{
				$active = "honesty_report";
		}
		else
		{
			$active = "write_tip";
		}
	
	
	
		
echo"
<div id='main-content' class='content'>
			<div class='contentHeader'>
				<div class='name_contentHeader'> $first_name_p $last_name_p </div>
				<div class='date_contentHeader'> Member Since: $user_date_p </div>
				<div id='like_contentHeader'> Likes:100 </div>
			</div>
			<div class='accountContent'>
				<h1>Overview</h1>
				<div class='overviewForm accountFormSize'>
					<h2>Community Stats</h2>
					<table>
						<tr>
							<td>Group
							<td>Member
						<tr>
							<td>Posts
							<td>$total_post
						<tr>
							<td>Most Active In
							<td>$active
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
							<td>$gender_p
						<tr>
							<td>Interests
							<td><div class='interestClass'>NothingNothing NothingNothingNothingNothingNothingNothing NothingNothingNothingNothi ngNothingNothingNothingNothingNothingNothingNothingN
									othing  NothingNothingNothingNothi ngNothingNothingNothingNot hingNothingNothingNothingNothingNoth ingNothingNothingNothingNoth ingNothingNothingNothingNothingNothingNothingNothingNoth
									ingNothingNothingNothingNothingNothingNothingNothingNothing</div>
					</table>
					<h2>Contact Information</h2>
					<table>
						<tr>
							<td>Email:
							<td>$email_p
						<tr>
							<td>Phone:
							<td>123-123-1234
					</table>
				</div>
			</div>
		</div>
";		
}
?>