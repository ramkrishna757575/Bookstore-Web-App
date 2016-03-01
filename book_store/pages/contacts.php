<?php $open_page="contacts"; session_start();?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BookStore Automation System</title>
	<link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="templatemo_container">
		<?php include "../templates/templatemo_menu.php"; ?>
        <?php include "../templates/templatemo_header.php"; ?>
        <?php include_once "../functions/session_mon.php"; ?>
        <div id="templatemo_content">
        	<div id="page_header"></div>	
        	<div class="contacts_form">
        		<form action="" method="post">
        			<ul>
        				<li>
        					<input type="text" name="name" id="name" placeholder="Name" maxlength="25">		
        				</li>
        				<li>
        					<input type="text" name="email" id="email" placeholder="Email" maxlength="50">
        				</li>
        				<li>
        					<input type="text" name="phone" id="phone" Placeholder="Phone" maxlength="13">
        				</li>
        				<li>
        					<textarea name="msg" id="msg" cols="33" rows="10" Placeholder="Message" maxlength="390"></textarea>
        				</li>
        				<li>
        					<input id="submit" type="submit" value="Send">
        				</li>
        			</ul>
        		</form>
        	</div>
        	<div class="cleaner">&nbsp;</div>		
    	</div>
    	<?php include "../templates/templatemo_footer.php" ?>
    </div>
</body>
</html>