<!-- Connect -->
<?php
	include("include/connect.php");


 if(isset($_POST['login_button']))  
	{
		$email_p = $_POST['email'];
		$password_p = $_POST['password'];
		
		
		//check errors
		if(empty($email_p) || empty($password_p)) 
		{
			echo "Error - Enter all the fields";
		}
		else
		{
			//BINARY for case sensitive
			$sql = mysql_query("SELECT * FROM user WHERE email ='$email_p' AND BINARY password='$password_p'");
				
			//make sure person exists in database---
			$existCount = mysql_num_rows($sql); //count the rows where the sql is ture 
			if($existCount == 1)                //make sure name is only one in database
			{
				$row = mysql_fetch_assoc($sql);
				$user_id_db = $row["user_id"];
				$first_name_db = $row['first_name'];
				$email_db = $row['email'];
				
					//sessions
					setcookie("id", $user_id_db, time()+172800, '/anti-scam/');   
					setcookie("firstname", $first_name_db, time()+172800,'/anti-scam/'); 
					setcookie("email", $email_db, time()+172800,'/anti-scam/'); 	
					header("location: index.php");		
			}
			else
			{
				echo"session didnt work";
			}
		}
	}
?>