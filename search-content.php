<?php
echo"<div id='main-content' class='content'>";
if((isset($_GET['search'])) || (isset($_POST['resortType'])))
	{
		//post variables
		$types_p = $_GET['types'];
		$category_p = $_GET['category'];
		$keyword_p = $_GET['keywords'];
		
		//function variables
		$item_per_page = 0;
		$page_query = 0;
		$pages = 0;
		$page = 0;
		$start = 0;
		

		echo"
    	<div id='searchContentHeader'>        
        	<div class='title'><a href='search.php'>Search</a>>$types_p</div>
			<form action='report.php' id='report_sort'>
           		<button type='submit' id='reportButton' class='button reportButton' name='report' >Report</button>
			</form>
            <div class='searchHeaderResortBar'>
		        <div class='pageTracker'>Results 1-10 of 300</div>
                <div id='resortBar'>Sort By: &nbsp; 
					<form action='search.php?types=$types_p&category=$category_p&keywords=$keyword_p' method='POST'>
						<select id='resortBarSelect' class='select' name='resortType' onchange='this.form.submit();'>
							<option value='relevance'>Relevance</option>
							<option value='title'>Title</option>
							<option value='date'>Date</option>
							<option value='mostLikes'>Most Likes</option> 
						 </select>
					 </form>
                </div>
            </div>
        </div>
		<div id='scrollbar1'>
        		<div class='scrollbar'><div class='track'><div class='thumb'><div class='end'></div></div></div></div>
        		<div class='viewport'>
                	<div class='overview'>
					  <div class='searchContent'>
		";
		
		
		/////////////////////////////////////////////////////
		//////////// function - set up pagination ///////////
		/////////////////////////////////////////////////////
		set_up_pagination($item_per_page, $page_query, $pages, $page, $start, $types_p, $category_p, $keyword_p);

		
		if(isset($_POST['resortType']))
		{
			$sort_p = $_POST['resortType'];
			if($sort_p == 'title'){$sort_p = 'ORDER BY name ASC';}
			if($sort_p == 'date'){$sort_p = 'ORDER BY date ASC';}
			if($sort_p == 'mostLikes'){$sort_p = 'ORDER BY likes DESC';}
		}
		else
		{
			$sort_p = '';
		}


		if($types_p == 'All')
			{
					$report_select_query = mysql_query("SELECT * FROM report WHERE (category = '$category_p') && (name_id LIKE '%$keyword_p%' || 
					name LIKE '%$keyword_p%' || address LIKE '%$keyword_p%' || city LIKE '%$keyword_p%' || state LIKE '%$keyword_p%' ||
				    country LIKE '%$keyword_p%' || zipcode LIKE '%$keyword_p%' || phone LIKE '%$keyword_p%' || email LIKE '%$keyword_p%' || 
					story LIKE '%$keyword_p%' ) $sort_p LIMIT $start, $item_per_page") 
					or die(mysql_error());  
			}
			else
			{
				$report_select_query = mysql_query("SELECT * FROM report WHERE (report_type LIKE '%$types_p%' && category = '$category_p') && 
				(name_id LIKE '%$keyword_p%' || name LIKE '%$keyword_p%' || address LIKE '%$keyword_p%' || city LIKE '%$keyword_p%' || 
				state LIKE '%$keyword_p%' || country LIKE '%$keyword_p%' || zipcode LIKE '%$keyword_p%' || phone LIKE '%$keyword_p%' || 
				email LIKE '%$keyword_p%' || story LIKE '%$keyword_p%') $sort_p LIMIT $start, $item_per_page") 
				or die(mysql_error());  
			}	
		
		if(mysql_num_rows($report_select_query) != 0)
		{
			while($row = mysql_fetch_assoc($report_select_query))
			{
				$user_id_db = $row['user_id'];
				$name_db = $row['name'];
				$date_db = $row['date'];
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
		/*** no result found ***/
		else
		{
			echo"<div id=''>
					empty no result
				</div>";
		}
				echo"</div>";//end searchContent 
				
		///////////////////////////////
		/****** pagination **********/
		//////////////////////////////

		echo "</div></div>"; include('pagebar.php'); echo"</div>"; //div scrollbar1		
	}
	else
	{
		echo"step for searching";
	}
	
	
	echo"</div>"; //searchContent
	
?>