<?php
echo"<div id='main-content' class='content'>";
if(isset($_POST['search']))
	{
		echo"
    	<div id='searchContentHeader'>        
        	<div class='title'>Buyer>Search>Tips&Scams </div>
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
        </div>";
		
		
$user_id_p = $_COOKIE['id'];
	$types_p = $_POST['types'];
	$id_p = $_POST['search_opponent_id'];
	$name_p = $_POST['search_opponent_name'];
	$address_p = $_POST['search_opponent_address'];
	$city_p = $_POST['search_opponent_city'];
	$state_p = $_POST['search_opponent_state'];
	$country_p = $_POST['search_opponent_country'];
	$zipcode_p = $_POST['search_opponent_zipcode'];
	$email_p = $_POST['search_opponent_email'];
	$phone = $_POST['search_opponent_phone'];
	$category_p = $_POST['scam_category'];
	$keyword_p = $_POST['keywords'];
	
	$women_query = mysql_query("SELECT * FROM report WHERE report_type LIKE '%$types_p%' || name_id LIKE '%$name_p%' || name LIKE '%$name_p%'  ||
	address LIKE '%$address_p%' || city LIKE '%$city_p%' || state LIKE '%$state_p%' || country LIKE '%$country_p%' || zipcode LIKE '%$zipcode_p%' || 	
	email LIKE '%$email_p%' || phone LIKE '%$phone%' || category LIKE '%$category_p%'  || story LIKE '%$keyword_p%'") 
	or die(mysql_error());  
	while($row = mysql_fetch_assoc($women_query))
	{
		//search content php
	}

	}
	else
	{
		echo"step for searching";
	}
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