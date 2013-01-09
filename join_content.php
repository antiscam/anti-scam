<div class='content form-content'>
    	<div class='form'>
            <h1>SIGN UP</h1>
            <h2>IT'S FREE</h2>
            <form action='join.php' method='POST'>
                <p>
                    <input type='field' placeholder='My First Name'  id='first-name-field' class='textbox <?php echo $error_class_first?>' 
                   	 	name='first_name_input' value="<?php if(isset($_POST['first_name_input'])){echo htmlentities($_POST['first_name_input']);}?>" />
                    
                    <input type='field' placeholder='My Last Name' id='last-name-field' class='textbox <?php echo $error_class_last?>' 
                   	 	name='last_name_input' value="<?php if(isset($_POST['last_name_input'])){echo htmlentities($_POST['last_name_input']);}?>"/>
                </p>
                <p>
                    <input type='field' placeholder='My Email Address' id='email-field' class='textbox text_box_spec <?php echo $error_class_email?>' 
                    	name='email_input' value="<?php if(isset($_POST['email_input'])){echo htmlentities($_POST['email_input']);}?>"/>
                </p>
                <p>
                    <input type='field' placeholder='Retype Email Address' id='retype-email-field' 
                   		 class='textbox text_box_spec <?php echo $error_class_re_email?>' name='re_email_input'/>
                </p>
                <p>
                    <input type='password' placeholder='My Password' id='password-field'
                    	 class='textbox text_box_spec <?php echo $error_class_password?>' name='password_input' />
                </p>
                <p>
                    <input type='password' placeholder='Retype My Password' id='retype-password-field' 
                    	class='textbox text_box_spec <?php echo $error_class_re_password?>' name='re_password_input'/>
                </p>
                <p>
                    <input type="radio" id='femaler-radio' class='radio ' name="gender"  value="female"> <label>Female</label>
                    <input type="radio" id='male-radio' class='radio' name="gender"  value="male"> <label>Male</label>
               </p> 
               <p>
                    By clicking Sing Up, you agree to our <a href='#'>Terms</a> and that you have read our <a href='#'>Anti-Scam Policy					
                    </a>
               </p>
               <p>
                    <button type="submit" class='button' id='button_signup' name="signup" >Sign Up</button>
               </p>  
            </form>
        </div>
    </div>