<?php 
	function connect_database()
	{
		require_once 'db_login.php';
		$db_server=mysql_connect($db_hostname,$db_username,$db_password);
		if(!$db_server) die("Unable to connect to database: " . mysql_error());
		mysql_select_db($db_database) or die("Database not selected: " . mysql_error());
		return $db_server;
	}
 ?>