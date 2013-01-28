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
		<div id='searchContentHeader'>        
        	<div class='title'><a href='search.php'>Search</a>>Scams>Topic Name </div>
            <button type='submit' id='reportButton' class='button reportButton' name='reply' >Reply</button>
            <div id='faceBook' class='postHeaderAdds'>
            	fb
            </div>
            <div id='emailToFriend' class='postHeaderAdds'>
             EM
            </div>            
        </div>
        <div id='postContent'>
        	<div id='postScrollbar'>
        		<div class='scrollbar'><div class='track'><div class='thumb'><div class='end'></div></div></div></div>
        		<div class='viewport'>
                	<div class='overview'>                    
                        <div class='reportedSotry'>
                        	<div class='postHead'>
                                <div class="date">
                                     Posted at 19 February 2006 - 07:30 PM
                                </div>
                                <div class="avoid">
                                     <a class='clickToIncrease' href="#">Avoid</a>:200 people!
     <div id="avoidHover">The number of people avoid the same scam!</div>
                                </div>
                               
                            </div>
                            
                            
                                                                           
                            <div class='userInfo'>
                                <div class='avatar'>                        
                                </div>
                                <div class='userName'>
                                    myName
                                </div>
                                <div class='userDecription'>
                                    descriptions
                                </div>
                            </div>
                            <div class='postContentRight'>
                                <div class='postInfo'>
                                    <div class='opponentInfo'>
                                        <p>Opponent's Information:</p>
                                        <div class='name_'>Name:</div>
                                        <div class='address_'>Address:</div>
                                        <div class='phone_'>Phone:</div>
                                        <div class='email_'>Email:</div>
                                        <div class='account_'>Acount:</div>
                                    </div>
                                    <div class="separatingLine"></div>
                                    <div class='story'>
                                        Her is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is what happened asdasdasdddddddddaHer is wh
                                    </div>
                                </div>
                            </div>                    
                        </div>
                        
                        
                        <!--1nd comment-->                        
                   		<div class='user_comments'>
                        	<div class="separatingLine" style="clear:both;"></div>
	                        <div class='postHead'>                            
                                <div class="date">
                                     Posted at 19 February 2006 - 07:30 PM
                                </div>      
                                <div class="avoid">
                                    <a class='clickToIncrease' href="#">Likes:</a>200
                                </div>
                            </div>
                            <div class='userInfo'>
                                <div class='avatar'>                        
                                </div>
                                <div class='userName'>
                                    myName
                                </div>
                                <div class='userDecription'>
                                    descriptions
                                </div>
                            </div>
                            <div class='postContentRight'>
                                <div class='comments'>Here is the commentHere is the commentHere is the commentHere is the comment</div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        <!--2nd comment-->
                        <div class='user_comments'>
                        	<div class="separatingLine" style="clear:both;"></div>
	                        <div class='postHead'>                            
                                <div class="date">
                                     Posted at 19 February 2006 - 07:30 PM
                                </div>      
                                <div class="avoid">
                                    <a class='clickToIncrease' href="#">Likes:</a>200
                                </div>
                            </div>
                            <div class='userInfo'>
                                <div class='avatar'>                        
                                </div>
                                <div class='userName'>
                                    myName
                                </div>
                                <div class='userDecription'>
                                    descriptions
                                </div>
                            </div>
                            <div class='postContentRight'>
                                <div class='comments'>Here is the commentHere is the commentHere is the commentHere is the comment</div>
                            </div>                            
                        </div>                        
                    </div>                    
                </div>
                <div class="pageBar">
                    <div class="space"></div>
                    <table class="table">
                        <tr>
                            <td>
                                <form method="post" class="forms" action="../report.php">
                                    <button class="button"> <!--onclick="location.href='../index.php'" for input type button-->
                                    <div class="toEnd"><div class="line floatL"></div> <div class="arrowLeft floatR"></div></div>
                                    </button>	
                                </form>
                            </td>
                            <td>
                                <form method="post" class="forms" action="../index.php">
                                    <button class="button"><div class="arrowLeft"></div>
                                    </button>
                                </form>
                            </td>
                            <td> <div class="pageBarLine"></div></td>
                            <td>
                                Page <input type="number" placeholder="1" class="pageNumber"/> of 200
                            </td>
                            <td><div class="pageBarLine"></div></td>
                            <td>
                                <form method="post" class="forms" action="../index.php">
                                    <button class="button"><div class="arrowRight"></div>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form method="post" class="forms" action="../index.php">
                                    <button class="button">
                                        <div class="toEnd"><div class="line floatR"></div> <div class="arrowRight floatL"></div></div>
                                    </button>
                                </form>
                            </td>
                            <td><div class="pageBarLine"></div></td>
                            <td>
                                Results 1-10 of 200
                            </td>
                            
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <?php include("right-content.php"); ?>
</div>


<!-- header -->
<?php
	include("include/footer.php");
?>