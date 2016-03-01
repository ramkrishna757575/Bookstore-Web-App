<?php
	require_once 'db_functions.php'; 
	require_once 'code_sanitizer.php';
	require_once '../others/salts.php';
	if(isset($_POST['username']) && isset($_POST['userid']) && isset($_POST['passwd']) && 
		isset($_POST['passwdc']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['addr']))
	{
		extract($_POST);
		if(!($username === "" || $userid === "" || $passwd === "" || $passwdc === "" || $email === "" ||
			$phone === "" || $addr === ""))
		{
			if($passwd === $passwdc)
			{
				$db_server = connect_database();

				$query = "SELECT * FROM users";
				$result = mysql_query($query);
				if(!$result)
				{
					echo "<p>Database access failed: " . mysql_error() . "</p>";
				} 
				else if(mysql_num_rows($result) >= 0)
				{
					if(mysql_num_rows($result) == 0)
					{
						$flag = 2;
					}
					else
					{
						$flag = 1;
						while ($row = mysql_fetch_assoc($result))					
						{
							if($row['user_id'] === $userid)
							{
								$flag = 1;
								break;
							}
							else
							{
								$flag = 2;
							}
						}
					}					
					if($flag == 1)
					{
						echo "<p>Oops! Username already exists</P>";
					}
					else
					{
						$passwd = $salt1 . (sanitizeMySQL($passwd)) . $salt2;
						$username = sanitizeMySQL($username);
						$userid = sanitizeMySQL($userid);
						$passwd = md5($passwd);
						$email = sanitizeMySQL($email);
						//$phone = sanitizeMySQL($phone);
						$addr = sanitizeMySQL($addr);
						$role = "users";
						$query = "INSERT INTO users	VALUES('$username','$userid','$passwd','$role','$addr','$phone','$email')";
						$result = mysql_query($query);
						if (!$result) echo "<p>Database access failed: " . mysql_error() . "</p>";
						else
						{
							session_start();
							$_SESSION['userid'] = $userid;	
							include_once "session_mon.php";						
						}
					}				
				}
				mysql_close($db_server);
			}
			else
			{
				echo "<p>The passwords you entered do not match.</p>";
			}
		}
		else
		{
			echo "<p>All fields are compulsory!</p>";
		}		
	}
	else
	{
		echo "<p>All fields are compulsory!</p>";
	}
 ?>