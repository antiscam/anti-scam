<?php
 if((isset($_COOKIE['firstname']))) /*** HAS TO BE LOGED IN ***/
 {
	 echo"
	<div class='content'>    	
        <div id='TabbedPanels1' class='TabbedPanels'>
          <ul class='TabbedPanelsTabGroup'>
            <li class='TabbedPanelsTab' tabindex='0'>Scam</li>
            <li class='TabbedPanelsTab honesty' tabindex='0'>Honesty</li>
          </ul>
          <div class='TabbedPanelsContentGroup'>";
			
			// Start of the content1
			echo"
           <div id='hello' class='form report report-scambg'>";
    			// scrollbar 
				echo"
                <div id='scrollbar1'><div class='scrollbar'><div class='track'><div class='thumb'><div class='end'></div></div></div></div><div id='viewport'><div class='overview'>
                
                        <h1>Report A Scam</h1>
                        <p id='layout-for-p'>Please provide informations as much as possible</p>
                                
                            <form action='report.php' method='POST'>
                                <h2>Opponent's Information:</h2> 
                                <p>
                                    <input type='field' placeholder='Opponent's Name'  id='first_name_field' class='textbox' name='scam_name'/>
                                </p>
                                <p>
                                    <input type='field' placeholder='Opponent's Address' id='opponent_address_field' class='textbox text_box_spec' name='scam_address'/>
                                </p>
                                 <p>
                                    <input type='field' placeholder='Opponent's City' id='opponent_city_field' class='textbox' name='scam_city'/>
                                     <input type='field' placeholder='Opponent's State' id='opponent_state_field' class='textbox' name='scam_state'/>
                                </p>
                                 <p>
                                    <input type='field' placeholder='Opponent's Country' id='opponent_country_field' class='textbox' name='scam_country'/>
                                     <input type='field' placeholder='Opponent's Zip Code' id='opponent_zipcode_field' class='textbox' name='scam_zipcode'/>
                                </p>
                                
                                <p>
                                    <input type='field' placeholder='Opponent's Phone' id='opponent-phone-field' class='textbox text_box_spec'
                                     name='scam_phone'/>
                                </p>
                                <p>
                                    <input type='field' placeholder='Opponent's Email Address' id='opponent_email_field' class='textbox text_box_spec' 
                                    name='scam_email'/>
                                </p>
                                <p>
                                    <textarea rows='5' cols='50' placeholder='What has Happened?' id='scroll' class='textbox report_textarea' name='scam_story'></textarea>
                
                                </p>
                                
                                <select class='select' name='scam_category' >
                                	<option value='industry'>Industry</option>
                                	<option value='retailstore'>RetailStore</option>
                                   	<option value='transportation'>Transportation</option> 
                                    <option value='WholeSale'>WholeSale</option>                                     
                                </select>
                                
                                <p>
                                    <button type='submit' class='button' id='button_signup' name='button_scam' >Sign Up</button>
                               </p> 
                            </form>
                           </div></div></div>"; //end of scroll bar            
    		           echo" </div>"; // end of div TabbedPanelsContent 

		    //Start of the content2
           echo"<div id='hello' class='form report report-honestybg'>";

          		 //scrollbar 
                echo"
				<div id='scrollbar1'><div class='scrollbar'><div class='track'><div class='thumb'><div class='end'></div></div></div></div><div class='viewport'><div class='overview'>
    
                        <h1>Report A Honesty</h1>
                        <p id='layout-for-p'>Please provide informations as much as possible</p>
                                
                            <form action='report_scam.php' method='POST'>                            
                                <h2>Opponent's Information:</h2> 
                                <p>
                                    <input type='field' placeholder='Opponent's Name'  id='first_name_field' class='textbox' name='honesty_name'/>
                                </p>
                                <p>
                                    <input type='field' placeholder='Opponent's Address' id='opponent_address_field' class='textbox text_box_spec' name='honesty_address'/>
                                </p>
                                 <p>
                                    <input type='field' placeholder='Opponent's City' id='opponent_city_field' class='textbox' name='ohonesty_city'/>
                                     <input type='field' placeholder='Opponent's State' id='opponent_state_field' class='textbox' name='honesty_state'/>
                                </p>
                                 <p>
                                    <input type='field' placeholder='Opponent's Country' id='opponent_country_field' class='textbox' name='honesty_country'/>
                                     <input type='field' placeholder='Opponent's Zip Code' id='opponent_zipcode_field' class='textbox' name='honesty_zipcode'/>
                                </p>
                                
                                <p>
                                    <input type='field' placeholder='Opponent's Phone' id='opponent-phone-field' class='textbox text_box_spec'
                                     name='honesty_phone'/>
                                </p>
                                <p>
                                    <input type='field' placeholder='Opponent's Email Address' id='opponent_email_field' class='textbox text_box_spec' 
                                    name='honesty_email'/>
                                </p>
                                <p>
                                    <textarea rows='5' cols='50' placeholder='What has Happened?' id='scroll' class='textbox report_textarea' name='honesty_story'></textarea>
                
                                </p>
                                
                                <select class='select' name='honesty_category' >
                                	<option value='industry'>Industry</option>
                                	<option value='retailstore'>RetailStore</option>
                                   	<option value='transportation'>Transportation</option> 
                                    <option value='WholeSale'>WholeSale</option>                                     
                                </select>
                                
                                <p>
                                    <button type='submit' class='button' id='button_signup' name='button_honesty' >Sign Up</button>
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
	 <div class='content'>    	
	 	plz log in first
	 </div>";
 }
?>