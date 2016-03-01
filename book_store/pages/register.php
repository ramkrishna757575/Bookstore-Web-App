<?php $open_page="register"; session_start();?>
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
        	<div class="register_form">
        		<form action="../functions/register_user.php" method="post" onSubmit="validateForm()">
							<ul>
								<li>
									<input type="text" name="username" id="username" placeholder="Your Name" maxlength="30">
								</li>
								<li>
									<input type="text" name="userid" id="userid" placeholder="User Name" maxlength="30">
								</li>
								<li>
									<input type="password" name="passwd" id="passwd" placeholder="Password" maxlength="15">
								</li>
								<li>
									<input type="password" name="passwdc" id="passwdc" placeholder="Confirm Password" maxlength="15">
								</li>
								<li>
									<?php if(isset($_SESSION['userid'])) header("Location: index.php"); ?>
								</li>
								<li>
									<input type="text" name="email" id="email" placeholder="Email" maxlength="50">
								</li>
								<li>
									<input type="text" name="phone" id="phone" placeholder="Phone" maxlength="12">
								</li>
								<li>
									<textarea name="addr" id="addr" cols="33" rows="5" placeholder="Address" maxlength="195"></textarea>
								</li>
								<li>
									<input id="submit" type="submit" value="Register">
								</li>
							</ul>	
						</form>
		        	</div>	
		        	<div class="cleaner">&nbsp;</div>		
    	</div>
    	<?php include "../templates/templatemo_footer.php" ?>
    	<script src="../js/register_form_validation.js"></script>
    	<script src="../js/json2.js"></script>
		<script src="../js/ajaxLib.js"></script>
		<script src="../js/main.js"></script>
    </div> 
</body>
</html>