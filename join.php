<!-- header -->
<?php
	include("include/header.php");
?>



<!---------->
<!-- MENU -->
<!---------->
<div id='full_content'>
	<?php include("left-menu.php"); ?>
    <div id='join-content' class='content'>
    	<h1>SIGN UP</h1>
        <h2>IT'S FREE</h2>
    	<form action='join.php' method='POST'>
        	<p>
        		<input type='field' placeholder='My First Name' id='first-name-field' class='field' name='first-name'/>
                <input type='field' placeholder='My Last Name' id='first-name-field' class='field' name='first-name'/>
            </p>
            <p>
        		<input type='field' placeholder='My Email Address' id='first-name-field' class='field' name='first-name'/>
            </p>
            <p>
        		<input type='field' placeholder='Retype  First Name' id='first-name-field' class='field' name='first-name'/>
            </p>
            <p>
        		<input type='field' id='first-name-field' class='field' name='first-name'/>
            </p>
            <p>
        		<input type='field' id='first-name-field' class='field' name='first-name'/>
            </p>
            <p>
                <input type="radio" id='femaler-radio' class='radio' name="gender"  value="female"> <label>Female</label>
                <input type="radio" id='male-radio' class='radio' name="gender"  value="male"> <label>Male</label>
           </p> 
           <p>
           		By clicking Sing Up, you agree to our <a href='#'>Terms</a> and that you have read our <a href='#'>Anti-Scam Policy</a>
           </p>
           <p>
           		<input type="submit" i class='button' d='button_signup' name="signup" >Signup</button>
           </p>  
        </form>
    </div>
    
    <?php include("right-content.php"); ?>
</div>


<!-- header -->
<?php
	include("include/footer.php");
?>