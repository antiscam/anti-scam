<?php
echo"<div id='main-content' class='content'>";
if(isset($_POST['search']))
	{
		echo"
    	<div id='searchContentHeader'>        
        	<div class='title'><a href='search.php'>Search</a>>Tips&Scams </div>
            <button type='submit' id='reportButton' class='button reportButton' name='report' >Report</button>
            <div class='searchHeaderResortBar'>
		        <div class='pageTracker'>Results 1-10 of 300</div>
                <div id='resortBar'>Sort By: &nbsp; 
					<select id='resortBarSelect' class='select' name='resortType' >
						<option value='relevance'>Relevance</option>
						<option value='title'>Title</option>
						<option value='date'>Date</option>
						<option value='mostLikes'>Most Likes</option> 
					 </select>
                </div>
            </div>
        </div>
		<div id='scrollbar1'>
        		<div class='scrollbar'><div class='track'><div class='thumb'><div class='end'></div></div></div></div>
        		<div class='viewport'>
                	<div class='overview'>
					  <div class='searchContent'>
		";
		
	$types_p = $_POST['types'];
	$category_p = $_POST['scam_category'];
	$keyword_p = $_POST['keywords'];
	
	if($types_p == 'all')
	{
			$report_select_query = mysql_query("SELECT * FROM report WHERE (category = '$category_p') && (name_id LIKE '%$keyword_p%' || name LIKE '%$keyword_p%' || address LIKE '%$keyword_p%' || city LIKE '%$keyword_p%' || state LIKE '%$keyword_p%' || country LIKE '%$keyword_p%' || zipcode LIKE '%$keyword_p%' || phone LIKE '%$keyword_p%' || email LIKE '%$keyword_p%' || story LIKE '%$keyword_p%')") 
	or die(mysql_error());  
	}
	else
	{
		$report_select_query = mysql_query("SELECT * FROM report WHERE (report_type LIKE '%$types_p%' && category = '$category_p') && (name_id LIKE '%$keyword_p%' || name LIKE '%$keyword_p%' || address LIKE '%$keyword_p%' || city LIKE '%$keyword_p%' || state LIKE '%$keyword_p%' || country LIKE '%$keyword_p%' || zipcode LIKE '%$keyword_p%' || phone LIKE '%$keyword_p%' || email LIKE '%$keyword_p%' || story LIKE '%$keyword_p%')") 
	or die(mysql_error());  
	}
	
	/*  || country LIKE '%$country_p%' || zipcode LIKE '%$zipcode_p%' || 	
	email LIKE '%$email_p%' || phone LIKE '%$phone_p%' || category LIKE '%$category_p%'  || story LIKE '%$keyword_p%' 
	*/
	while($row = mysql_fetch_assoc($report_select_query))
	{
		$user_id_db = $row['user_id'];
		$name_db = $row['name'];
		$date_db = $row['date'];
		//$date_db = date('n/j/Y', $date_db);
		$story_db = $row['story'];
		
		$user_select_query = mysql_query("SELECT * FROM user WHERE user_id = '$user_id_db'") or die(mysql_error());
		$row = mysql_fetch_assoc($user_select_query);
			$first_name_db = $row['first_name'];
		
		echo"
			<div id='searchStory1' class='searchStory'>
				<div class='searchTitle'><a href='#'>$name_db</a></div>
				<div class='searchDate'>Date: $date_db</div>
				<div class='searchAuthor'>$first_name_db</div>
				<div class='searchStoryContent'>$story_db</div>
				<div class='separatingLine'></div>
			</div>
			
			
		";
		echo"</div></div></div>";//end scroll bar 
	echo "</div>"; //div main-content
		
	}

	}
	else
	{
		echo"step for searching";
	}
	echo"</div>"; //searchContent
	
?>