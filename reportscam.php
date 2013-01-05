<!-- header -->
<?php
	include("include/header.php");
?>



<!---------->
<!-- MENU -->
<!---------->
<div id='full_content'>
	<?php include("left-menu.php"); ?>
    <div class='content form-content '>
    	<div class='form report scroll'>
            <h1>Report A Scam</h1>
            <p id="layout-for-p">Please provide informations as much as possible</p>
            
            <form action='report_scam.php' method='POST'>
	            <h2>My Information:</h2>
                <p>
                    <input type='field' placeholder='My First Name'  id='first-name-field' class='textbox' name='first-name'/>
                    <input type='field' placeholder='My Last Name' id='last-name-field' class='textbox' name='last-name'/>
                </p>
                <p>
                    <input type='field' placeholder='My Email Address' id='email-field' class='textbox text-box-spec' name='email'/>
                </p>
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
                <p>
                    <button type="submit" class='button' id='button_signup' name="signup" >Sign Up</button>
               </p> 
            </form>            
        </div>
    </div>
    <?php include("right-content.php"); ?>
</div>


<!-- header -->
<?php
	include("include/footer.php");
?>