<!-- header -->
<?php
	include("include/header.php");
?>


<!---------->
<!-- MENU -->
<!---------->
<div id='full_content'>
	<?php include("left-menu.php"); ?>
    
	<div class='content'>    	
        <div id="TabbedPanels1" class="TabbedPanels">
          <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab" tabindex="0">Scam</li>
            <li class="TabbedPanelsTab honesty" tabindex="0">Honesty</li>
          </ul>
          <div class="TabbedPanelsContentGroup">
			          <!--Start of the content1-->
           <div id='hello' class='form report report-scambg'>
            <div class='scrollbar'><div class='track'><div class='thumb'><div class='end'></div></div></div></div>
	            <div class='overview'>
    	        	<div class='viewpoint'>
    
                        <h1>Report A Scam</h1>
                        <p id="layout-for-p">Please provide informations as much as possible</p>
                                
                            <form action='report_scam.php' method='POST'>
                                <h2>Opponent's Information:</h2> 
                                <p>
                                    <input type='field' placeholder="Opponent's Name"  id='first_name_field' class='textbox' name='opponent_name'/>
                                </p>
                                <p>
                                    <input type='field' placeholder="Opponent's Address" id='opponent_address_field' class='textbox text_box_spec' name='opponent_address'/>
                                </p>
                                 <p>
                                    <input type='field' placeholder="Opponent's City" id='opponent_city_field' class='textbox' name='opponent_city'/>
                                     <input type='field' placeholder="Opponent's State" id='opponent_state_field' class='textbox' name='opponent_state'/>
                                </p>
                                 <p>
                                    <input type='field' placeholder="Opponent's Country" id='opponent_country_field' class='textbox' name='opponent_country'/>
                                     <input type='field' placeholder="Opponent's Zip Code" id='opponent_zipcode_field' class='textbox' name='opponent_zipcode'/>
                                </p>
                                
                                <p>
                                    <input type='field' placeholder="Opponent's Phone" id='opponent-phone-field' class='textbox text_box_spec'
                                     name='opponent-phone'/>
                                </p>
                                <p>
                                    <input type='field' placeholder="Opponent's Email Address" id='opponent_email_field' class='textbox text_box_spec' 
                                    name='opponent_email'/>
                                </p>
                                <p>
                                    <textarea rows="5" cols="50" placeholder="What has Happened?" id="scroll" class="textbox report_textarea"></textarea>
                
                                </p>
                                
                                <select class="select" name="category" ><!--no size will be a drop down list-->
                                	<option value="industry">Industry</option>
                                	<option value="retailstore">RetailStore</option>
                                   	<option value="transportation">Transportation</option> 
                                    <option value="WholeSale">WholeSale</option>                                     
                                </select>
                                
                                <p>
                                    <button type="submit" class='button' id='button_signup' name="signup" >Sign Up</button>
                               </p> 
                            </form>            
    		            </div>
	                </div>
                </div>

			          <!--Start of the content2-->
           <div id='hello' class='form report report-honestybg'>
            <div class='scrollbar'><div class='track'><div class='thumb'><div class='end'></div></div></div></div>
	            <div class='overview'>
    	        	<div class='viewpoint'>
    
                        <h1>Report A Honesty</h1>
                        <p id="layout-for-p">Please provide informations as much as possible</p>
                                
                            <form action='report_scam.php' method='POST'>                            
                                <h2>Opponent's Information:</h2> 
                                <p>
                                    <input type='field' placeholder="Opponent's Name"  id='first-name-field' class='textbox' name='opponent-name'/>
                                </p>
                                <p>
                                    <input type='field' placeholder="Opponent's Address" id='opponent-address-field' class='textbox text-box-spec' name
                                    ='opponent-address'/>
                                </p>
                                <p>
                                    <input type='field' placeholder="Opponent's Phone" id='opponent-phone-field' class='textbox text-box-spec'
                                     name='opponent-phone'/>
                                </p>
                                <p>
                                    <input type='field' placeholder="Opponent's Email Address" id='opponent-email-field' class='textbox text-box-spec' 
                                    name='opponent-email'/>
                                </p>
                                <p>
                                    <textarea rows="5" cols="50" placeholder="What has Happened?" id="scroll" class="textbox report-textarea"></textarea>
                
                                </p>
                                
                                <select  class="select" name="category" ><!--no size will be a drop down list-->
                                	<option value="industry">Industry</option>
                                	<option value="retailstore">RetailStore</option>
                                   	<option value="transportation">Transportation</option> 
                                    <option value="WholeSale">WholeSale</option>                                     
                                </select>
                                
                                <p>
                                    <button type="submit" class='button' id='button_signup' name="signup" >Sign Up</button>
                               </p> 
                            </form>            
    		            </div>
	                </div>
                </div>
            </div>
        </div>
             <script src="js/jquery.js"></script>
           	
        </div>
    
    <?php include("right-content.php"); ?>
</div>


<!-- header -->
<?php
	include("include/footer.php");
?>