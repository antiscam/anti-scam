<!-- header -->
<?php
	include("include/header.php");
?>



<!---------->
<!-- MENU -->
<!---------->
<div id='full_content'>
	<?php include("left-menu.php"); ?>
    <div class='content form-content'>
    	<div class='form'>
            <h1>SIGN UP</h1>
            <h2>IT'S FREE</h2>
            <form action='join.php' method='POST'>
                <p>
                    <input type='field' placeholder='My First Name'  id='first-name-field' class='textbox' name='first-name'/>
                    <input type='field' placeholder='My Last Name' id='last-name-field' class='textbox' name='last-name'/>
                </p>
                <p>
                    <input type='field' placeholder='My Email Address' id='email-field' class='textbox text-box-spec' name='email'/>
                </p>
                <p>
                    <input type='field' placeholder='Retype Email Address' id='retype-email-field' class='textbox text-box-spec' 
                    name='retype-email'/>
                </p>
                <p>
                    <input type='field' placeholder='My Password' id='password-field' class='textbox text-box-spec' name='password'/>
                </p>
                <p>
                    <input type='field' placeholder='Retype My Password' id='retype-password-field' class='textbox text-box-spec' name='retype-password'/>
                </p>
                <p>
                    <input type="radio" id='femaler-radio' class='radio' name="gender"  value="female"> <label>Female</label>
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
    <?php include("right-content.php"); ?>
</div>


<!-- header -->
<?php
	include("include/footer.php");
?>