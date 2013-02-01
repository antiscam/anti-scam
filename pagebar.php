<?php 
	if($pages >= 1 && $page <= $pages)
		{		
			if(isset($_GET['page']))
			{
				$x= $_GET['page'];     //current page for pre
				$y= $_GET['page'];   	//current page for next
				$cur = $_GET['page'];  //current page for last
			}
			else
			{
				$x = 1;
				$y = 1;
				$cur = 1;
			}
				
				
				
	echo"<div class='pageBar'>";
  	echo"<div class='space'></div>";
		
		//buttons
		echo'<table class="table">
             	<tr>
               		<td>';
						//First button
						if($x > 1)
						{
							
							echo'<a href="search.php?types='.$types_p.'&category='.$category_p.'&keywords='.$keyword_p.'&search=&page=1"> 
									<button class="button"> 
										<div class="toEnd"><div class="line floatL"></div> <div class="arrowLeft floatR"></div></div>
									</button>
							 </a>';
						}
						else
						{
							echo'<div class="toEnd"><div class="line floatL"></div> <div class="arrowLeft floatR"></div></div>';
						}
						echo'</td>';
						
						
						//Pre button
						echo'<td>';
							if($x > 1)
							{
								echo'<a href="search.php?types='.$types_p.'&category='.$category_p.'&keywords='.$keyword_p.'&search=&page='.--$x.'">
										<button class="button">
											<div class="arrowLeft"></div>
										</button>
								</a>';
							}
							else
							{
								echo'<div class="arrowLeft"></div>';
							}
			 			echo'</td>';
						
						//line
                        echo'<td><div class="pageBarLine"></div></td>';
                        
						//page scoller
						echo'<td>';
                        	echo"Page <input type='number' placeholder='$cur' class='pageNumber'/> of $pages";
                        echo'</td>';
							
			 
			 
						//next button
						echo'<td>';
							if($y < $pages)
							{
								echo'<a href="search.php?types='.$types_p.'&category='.$category_p.'&keywords='.$keyword_p.'&search=&page='.++$y.'">
										<button class="button">
											<div class="arrowRight"></div>
										</button>
								</a>';
							}
							else
							{
								echo'<div class="arrowRight"></div>';
							}
						echo'</td>';
			
			//last button
			echo'<td>';
				if($cur < $pages)
				{
					echo'<a href="search.php?types='.$types_p.'&category='.$category_p.'&keywords='.$keyword_p.'&search=&page='.$pages.'">
							<button class="button">
								<div class="toEnd"><div class="line floatR"></div> <div class="arrowRight floatL"></div></div>
							</button>
					</a>';	
				}
				else
				{
					echo'<div class="toEnd"><div class="line floatR"></div> <div class="arrowRight floatL"></div></div>';
				}
				echo'</td>';
				
				//line
				echo'<td><div class="pageBarLine"></div></td>';
				
				$on_page_result = mysql_num_rows($report_select_query);
				$total_result = mysql_num_rows($page_query);

				
                echo"<td>";
                	echo"Results $on_page_result- of $pages";
                 echo"</td>";
							
							
		 	echo'</tr>';
    	echo'</table>';
	echo"</div>";
}
?>