<?php
 if((isset($_COOKIE['firstname']))) /*** HAS TO BE LOGED IN ***/
 {
	if(isset($_SESSION['error_class'])){ $error_class = $_SESSION['error_class'];} else {$error_class = 'errorClass'; }	
	session_destroy();
	 
	 echo"
	<div class='content'>    	
        <div id='TabbedPanels1' class='TabbedPanels'>
          <ul class='TabbedPanelsTabGroup'>
            <li class='TabbedPanelsTab' tabindex='0'>Scam</li>
            <li id='honestyReport' class='TabbedPanelsTab honesty' tabindex='0'>Honesty</li>
          </ul>
          <div class='TabbedPanelsContentGroup'>";
			
			// Start of the content1
			echo"
           <div id='hello' class='form report report-scambg'>";
    			// scrollbar 
				echo"
                <div id='scrollbar1'><div class='scrollbar'><div class='track'><div class='thumb'><div class='end'></div></div></div></div><div class='viewport' style='width:440px;'><div class='overview'>
                
                        <h1>Report A Scam</h1>
                        <p id='layout-for-p'>Please provide informations as much as possible</p>
                                
                            <form action='report.php' method='POST'>
                                <h2>Opponent's Information:</h2> 
                                <p>
                                    <input type='field' placeholder='Opponents Name'  id='first_name_field' class='textbox' name='scam_name'/>
									<input type='field' placeholder='Opponents ID'  id='first_name_field' class='textbox' name='scam_id'/>
                                </p>
                                <p>
                                    <input type='field' placeholder='Opponents Address' id='opponent_address_field' class='textbox text_box_spec' name='scam_address'/>
                                </p>
                                 <p>
                                    <input type='field' placeholder='Opponents City' id='opponent_city_field' class='textbox' name='scam_city'/>
                                     <input type='field' placeholder='Opponents State' id='opponent_state_field' class='textbox' name='scam_state'/>
                                </p>
                                 <p>
                                    <input type='field' placeholder='Opponents Country' id='opponent_country_field' class='textbox' name='scam_country'/>
                                     <input type='field' placeholder='Opponents Zip Code' id='opponent_zipcode_field' class='textbox' name='scam_zipcode'/>
                                </p>
                                
                                <p>
                                    <input type='field' placeholder='Opponents Phone' id='opponent-phone-field' class='textbox text_box_spec'
                                     name='scam_phone'/>
                                </p>
                                <p>
                                    <input type='field' placeholder='Opponents Email Address' id='opponent_email_field' class='textbox text_box_spec' 
                                    name='scam_email'/>
                                </p>
                                <p>
                                    <textarea rows='5' cols='50' placeholder='What has Happened?' id='storyTextBox' 
									class='textbox report_textarea $error_class' name='scam_story'></textarea>
                
                                </p> 
								<div id='report_selectBox' class='center'>
								";
								
								include('search-category.php');
								echo"
                                </div>
                                <p>
                                    <button type='submit' class='button' id='button_next' name='button_scam' >Next</button>
                               </p> 
                            </form>
                           </div></div></div>"; //end of scroll bar            
    		           echo" </div>"; // end of div TabbedPanelsContent 

		    //Start of the content2
           echo"<div id='hello' class='form report report-honestybg'>";

          		 //scrollbar 
                echo"
				<div id='scrollbar2'><div class='scrollbar'><div class='track'><div class='thumb'><div class='end'></div></div></div></div><div class='viewport'><div class='overview'>
    
                        <h1>Report A Honesty</h1>
                        <p id='layout-for-p'>Please provide informations as much as possible</p>
                                
                            <form action='report.php' method='POST'>                            
                                <h2>Opponent's Information:</h2> 
                                <p>
                                    <input type='field' placeholder='Opponents Name'  id='first_name_field' class='textbox' name='honesty_name'/>
									<input type='field' placeholder='Opponents ID'  id='first_name_field' class='textbox' name='honesty_id'/>
                                </p>
                                <p>
                                    <input type='field' placeholder='Opponents Address' id='opponent_address_field' class='textbox text_box_spec' name='honesty_address'/>
                                </p>
                                 <p>
                                    <input type='field' placeholder='Opponents City' id='opponent_city_field' class='textbox' name='honesty_city'/>
                                     <input type='field' placeholder='Opponents State' id='opponent_state_field' class='textbox' name='honesty_state'/>
                                </p>
                                 <p>
                                    <input type='field' placeholder='Opponents Country' id='opponent_country_field' class='textbox' name='honesty_country'/>
                                     <input type='field' placeholder='Opponents Zip Code' id='opponent_zipcode_field' class='textbox' name='honesty_zipcode'/>
                                </p>
                                
                                <p>
                                    <input type='field' placeholder='Opponents Phone' id='opponent-phone-field' class='textbox text_box_spec'
                                     name='honesty_phone'/>
                                </p>
                                <p>
                                    <input type='field' placeholder='Opponents Email Address' id='opponent_email_field' class='textbox text_box_spec' 
                                    name='honesty_email'/>
                                </p>
                                <p>
                                    <textarea rows='5' cols='50' placeholder='What has Happened?' id='storyTextBox' class='textbox report_textarea' name='honesty_story'></textarea>
                
                                </p>
								<div id='report_selectBox' class='center'>";
								include('search-category.php');
								echo"                                
								</div>
                                <p>
                                    <button type='submit' class='button' id='button_next' name='button_honesty' >Next</button>
                               </p> 
                            </form> 
                             </div></div></div>"; //end of scroll bar                        
    		            echo"</div>"; //end of div TabbedPanelsContent
	                echo"</div>";  //end of div TabbedPanelsTabGroup
                echo"</div>"; //end of div TabbedPanels1
    
           	
        echo"</div>"; //end of div content
        
        
 }
 else
 {
	 echo"
	 <div class='content form-content'>    	
	 	<div id='contactus'>
	 	<h1>Report Center</h1>
		<p>Please Login before you report!</p> 
		<p> If you are not a member yet, you could <a href='join.php'>join</a> now! It ONLY takes 10 secs!</p>
		</div>
	 </div>";
 }
 
 
?>