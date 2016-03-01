<?php $open_page="login"; session_start();?>
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
        <div id="templatemo_content">
        	<div id="page_header"></div>
        	<div class="login_form">
        		<form action="../functions/user_login_validation.php" method="post">
						<ul>
							<li>
								<input type="text" name="userid" id="userid" Placeholder="User Name" maxlength="50">
							</li>
							<li>
								<input type="password" name="passwd" id="passwd" Placeholder="Password" maxlength="15">
							</li>
							<li>
								<input id="submit" type="submit" value="Login">
							</li>
							<li>
								<?php if(isset($_SESSION['userid'])) header("Location: index.php"); ?>
							</li>
						</ul>	
				</form>
        	</div>	
        	<div class="cleaner">&nbsp;</div>		
    	</div>
    	<?php include "../templates/templatemo_footer.php" ?>
    </div>
    <script src="../js/json2.js"></script>
	<script src="../js/ajaxLib.js"></script>
	<script src="../js/login_main.js"></script>
</body>
</html>