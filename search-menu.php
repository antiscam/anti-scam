<!---------->
<!-- MENU -->
<!---------->

	<div class="menu" id='searchMenu' >
			<div class="searchMenuHeader"><h2>Search</h2></div>
            <div class="searchMenuContent center">
            <p>enter "no" if you don't know for the certains feilds</p>
            <h3>Show Me:</h3>
            <form action='search.php' method='POST'>
                <select id="searchSelect" class='select' name='types' >
                    <option value='all'>All</option>
                    <option value='scam'>Scams</option>
                    <option value='honesty'>Honesties</option> 
                    <option value='tips'>Tips-Buyer</option>
                    <option value='tips'>Tips-Seller</option>
                </select>
               
               <!-- 
                <h3 id="searchNameText">Opponent's Info:</h3>
                <div id="opponentInfoBox">
                    <input type='field' placeholder="Opponent's Name" id="searchTextBox" class='textbox' name='search_opponent_name'/>  
                    <input type='field' placeholder="Opponent's ID" id="searchTextBox" class='textbox' name='search_opponent_id'/>           
                    <input type='field' placeholder="Opponent's Address" id="searchTextBox" class='textbox' name='search_opponent_address'/>
                    <input type='field' placeholder="City" id="searchTextBoxSmall" class='textbox' name='search_opponent_city'/>
                    <input type='field' placeholder="State" id="searchTextBoxSmall" class='textbox' name='search_opponent_state'/>
                    <input type='field' placeholder="Country" id="searchTextBoxSmall" class='textbox' name='search_opponent_country'/>
                    <input type='field' placeholder="ZipCode" id="searchTextBoxSmall" class='textbox' name='search_opponent_zipcode'/>                
                    <input type='field' placeholder="Opponent's Email" id="searchTextBox" class='textbox' name='search_opponent_email'/>
                    <input type='field' placeholder="Opponent's Phone" id="searchTextBox" class='textbox' name='search_opponent_phone'/>
                </div>
    			-->
                <h3 id="searchNameText">Category:</h3>  
                 <?php include("search-category.php"); ?>
               
                <h3 id="searchNameText">Keywords:</h3>
                <input type='field' placeholder="Words in the Title/Story" id="searchTextBox" class='textbox' name='keywords'/>         
                <a  id="searchButtonLink" class='button' href="index.php" >Back</a>            
                <button type="submit" id="searchButton" class='button' name="search" >Search</button>
            </form>
            
            </div>           
	</div>