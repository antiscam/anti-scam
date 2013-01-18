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
	$id_p = $_POST['search_opponent_id'];
	$name_p = $_POST['search_opponent_name'];
	$address_p = $_POST['search_opponent_address'];
	$city_p = $_POST['search_opponent_city'];
	$state_p = $_POST['search_opponent_state'];
	$country_p = $_POST['search_opponent_country'];
	$zipcode_p = $_POST['search_opponent_zipcode'];
	$email_p = $_POST['search_opponent_email'];
	$phone_p = $_POST['search_opponent_phone'];
	$category_p = $_POST['scam_category'];
	$keyword_p = $_POST['keywords'];
	$count = 0;
	
	if(empty($id_p)){$id_p='emptyempty';}if(empty($name_p)){$name_p='emptyempty';}if(empty($address_p)){$address_p='emptyempty';}
	if(empty($city_p)){$city_p='emptyempty';} if(empty($country_p)){$country_p='emptyempty';}if(empty($zipcode_p)){$zipcode_p='emptyempty';}
	if(empty($email_p)){$email_p='emptyempty';}if(empty($phone_p)){$phone_p='emptyempty';}if(empty($category_p)){$category_p='emptyempty';}
	if(empty($keyword_p)){$keyword_p='emptyempty';}
	
	$report_select_query = mysql_query("SELECT * FROM report WHERE report_type LIKE '%$types_p%' || name_id LIKE '%$id_p%' 
	|| name LIKE '%$name_p%' || address LIKE '%$address_p%' || city LIKE '%$city_p%' || story LIKE '%$keyword_p%' ") 
	or die(mysql_error());  
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
	}

	}
	else
	{
		echo"step for searching";
	}
	echo"</div>"; //searchContent
	echo"</div></div></div>";//end scroll bar 
	echo "</div>"; //div main-content
?>
    
    
    
    
 <!--
	<div id='main-content' class='content'>		
    	<div id='searchContentHeader'>        
        	<div class='title'>Buyer>Search>Tips&Scams </div>
            <button type="submit" id='reportButton' class='button reportButton' name='report' >Report</button>
            <div class='searchHeaderResortBar'>
		        <div class='pageTracker'>Results 1-10 of 300</div>
                <div id='resortBar'>Sort By: &nbsp; <select id="resortBarSelect" class='select' name='resortType' >
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
                        
                        
                        	<div id='searchStory1' class='searchStory'>
                                <div class='searchTitle'><a href="#">Title</a></div>
                                <div class='searchDate'>Date: 2012-01-12</div>
                                <div class='searchAuthor'> author</div>
                                <div class='searchStoryContent'>----------------------------------use javascript to write those divs for each story</div>
                                <div class='separatingLine'></div>
                            </div>
                            <div id='searchStory2' class='searchStory'>
                                <div class='searchTitle'><a href="#">Title</a></div>
                                <div class='searchDate'>Date: 2012-01-12</div>
                                <div class='searchAuthor'> author</div>
                                <div class='searchStoryContent'>-----------------------------------------------------------------------------------------------------------------------------------------------</div>
								<div class='separatingLine'></div>
                            </div>                            
                            <div id='searchStory3' class='searchStory'>
                                <div class='searchTitle'><a href="#">Title</a></div>
                                <div class='searchDate'>Date: 2012-01-12</div>
                                <div class='searchAuthor'> author</div>
                                <div class='searchStoryContent'>-----------------------------------------------------------------------------------------------------------------------------------------------</div>
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
    -->