<!------------->
<!-- CONNECT -->
<!------------->
<?php
include("include/connect.php");
?>


<?php
if(isset($_POST['report_id_s']))
{
	$report_id_s_p = $_POST['report_id_s'];
	
	$comment_query = mysql_query("SELECT * FROM comment WHERE report_id = $report_id_s_p")or die(mysql_error());  
	$row = mysql_fetch_assoc($comment_query);
		$likes_db = $row['likes'];
		$u_likes_db = $likes_db + 1;
	
	$comment_update= mysql_query("UPDATE comment
				                 SET likes = '$u_likes_db'
                                    WHERE report_id = '$report_id_s_p'") or die(mysql_error());
		echo"$u_likes_db";
		
}
?>