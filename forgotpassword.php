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
	    <div id='forgotP' class="center">
            <h1 class="boxShadow">Forgot Password</h1>
            <div class="main_content_area">
            <p>Please provide your email below.</p><p> We will send your password to the provided email.</p>
            <p><input type="email" placeholder="My Email is" class="textbox"></p>
            <button type="submit" id="button_forgotP" class="button reportButton">Enter</button>
            <p>Can't find the email? Check your Spam Folder!</p>
            </div>
        </div>
    </div>
    
    <?php include("right-content.php"); ?>
</div>


<!-- header -->
<?php
	include("include/footer.php");
?>