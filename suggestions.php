<!-- header -->
<?php
	include("include/header.php");
?>

<!---------->
<!-- MENU -->
<!---------->
<div id='full_content'>
	<?php include("left-menu.php"); ?>
    
	<div id='main-content' class='content'>
        <div class='suggestions form'>
            <form action='suggestions.php'>      
                <h1>Suggestions</h1>
                <p>Got suggestions? Tell us!</p>       
               			 <input type='field' placeholder='My First Name'  id='first-name-field' class='textbox <?php echo $error_class_first?>' 
                   	 	name='first_name_input' value="<?php if(isset($_POST['first_name_input'])){echo htmlentities($_POST['first_name_input']);}?>" />         </p>
                    <p>
                        <input type='field' placeholder='My Email Address' id='email-field' class='textbox text_box_spec <?php echo $error_class_email?>' 
                            name='email_input' value="<?php if(isset($_POST['email_input'])){echo htmlentities($_POST['email_input']);}?>"/>
                    </p>
                     <p>
                    <textarea rows='5' cols='50' placeholder='What is your suggestion?' id='suggestionBox' class='textbox report_textarea' name='scam_story'></textarea>
                
					</p>
                   <p>
                        <button type="submit" class='button' id='button_signup' name="signup" >Send</button>
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