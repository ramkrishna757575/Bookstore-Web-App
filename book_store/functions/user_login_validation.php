<?php 
	include_once "code_sanitizer.php";
	include_once "../others/salts.php";
	include_once "db_functions.php";

	$db_server = connect_database();

		if((isset($_POST['userid'])) && (isset($_POST['passwd'])))
		{
			extract($_POST);
			if($userid === "" || $passwd === "")
			{
				mysql_close();
				echo "<p>Please enter your userid and password</p>";
			}
			else
			{
				$usr=sanitizeMySQL($userid);
				$pass=$salt1.(sanitizeMySQL($passwd)).$salt2;
				$token=md5($pass);
				$query = "SELECT * FROM users WHERE user_id='$usr'";
				$result = mysql_query($query);
				if(!$result) echo "<p>Database access failed: " . mysql_error()."</p>";
				elseif(mysql_num_rows($result) !== 0)
				{
					$row = mysql_fetch_row($result);
						if($token === $row[2])
						{
							session_start();
							$_SESSION['userid'] = $usr;
							include_once "session_mon.php";
							mysql_close();
						} 			
						else 
						{
							echo "<p>Invalid userid/password combination</P>";
						}
				}
				else
				{
					echo "<p>Invalid userid/password combination</P>";
				}
			}			
		}
?>