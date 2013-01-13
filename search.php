<!-- header -->
<?php
	include("include/header.php");
?>

<!---------->
<!-- MENU -->
<!---------->
<div id='full_content'>
	<div class="menu" id='searchMenu' >
			<div class="searchMenuHeader"><h2>Search</h2></div>
            <div class="searchMenuContent center">
            <p>enter "no" if you don't know for the certains feilds</p>
            <h3>Show Me:</h3>
			<select id="searchSelect" class='select' name='types' >
            <option value='all'>All</option>
        	<option value='scams'>Scams</option>
         	<option value='honesties'>Honesties</option> 
	        <option value='tips'>Tips</option>
            </select>
            
            <h3 id="searchNameText">Opponent's Info:</h3>
            <div id="opponentInfoBox">
			<input type='field' placeholder="Opponent's Name" id="searchTextBox" class='textbox' name='search_opponent_name'/>           
			<input type='field' placeholder="Opponent's Address" id="searchTextBox" class='textbox' name='search_opponent_name'/>
			<input type='field' placeholder="City" id="searchTextBoxSmall" class='textbox' name='search_opponent_name'/>
			<input type='field' placeholder="State" id="searchTextBoxSmall" class='textbox' name='search_opponent_name'/>
   			<input type='field' placeholder="Country" id="searchTextBoxSmall" class='textbox' name='search_opponent_name'/>
            <input type='field' placeholder="ZipCode" id="searchTextBoxSmall" class='textbox' name='search_opponent_name'/>                
            <input type='field' placeholder="Opponent's Email" id="searchTextBox" class='textbox' name='opponent_email'/>
            <input type='field' placeholder="Opponent's Phone" id="searchTextBox" class='textbox' name='opponent_phone'/>
			</div>

            <h3 id="searchNameText">Category:</h3>
            <select id="searchSelect" class='select' name='scam_category' >
              <option value='all'>All</option>
              <option value='industry'>Industry</option>
              <option value='retailstore'>RetailStore</option>
              <option value='transportation'>Transportation</option> 
              <option value='WholeSale'>WholeSale</option>                                     
            <select>
            <h3 id="searchNameText">Keywords:</h3>
            <input type='field' placeholder="Words in the Title/Story" id="searchTextBox" class='textbox' name='keywords'/>         
            <button type="submit" id="searchButton" class='button' name="back" >Back</button>
			<button type="submit" id="searchButton" class='button' name="search" >Search</button>
            
            </div>           
	</div>
    
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
                                                <select>
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

    
    <?php include("right-content.php"); ?>
</div>


<!-- header -->
<?php
	include("include/footer.php");
?>