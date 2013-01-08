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
        <div id="TabbedPanels1" class="TabbedPanels">
          <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab" tabindex="0">Scam</li>
            <li class="TabbedPanelsTab" tabindex="0">Honesty</li>
          </ul>
          <div class="TabbedPanelsContentGroup">
            <div class="TabbedPanelsContent">Content 1</div>
            <div class="TabbedPanelsContent">Content 2</div>
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