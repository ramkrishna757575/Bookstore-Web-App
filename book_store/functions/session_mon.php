<?php 
	$flag = 1;
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800))
	{
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    $flag = 2;
	}
	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
	if (isset($_SESSION['userid']))
	{
		echo "<div id=\"session_status\"> Hello ". $_SESSION['userid']  . "</div>";
	}
	else
	{
		if($flag === 1)
			echo "<div id=\"session_status_inactive\"> You are not logged in " . "</div>";		
		else
			echo "<div id=\"session_status\"> No activity for 30 minutes on this page. Please LogIn again" . "</div>";
	}
 ?>