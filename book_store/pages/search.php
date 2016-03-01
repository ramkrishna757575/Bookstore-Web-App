<?php $open_page="search"; session_start();?>
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
        	<div class="search_form">        		
    			<ul>
                    <li>Search By:</li>
    				<li>
    					<select name="search_by" id="search_by">
                            <option value="isbn">ISBN</option>
                            <option value="author">Author</option>
                            <option value="name">Book Name</option>
                            <option value="publication">Publication</option>
                        </select>
    				</li>
                    <li id="list_search_box">
                        <form id="searchbox" action="" method="get">
                            <input id="search" type="text" name="search" placeholder="Type to search">
                            <input id="search_submit" type="submit" value="Search">
                        </form>
                    </li>
    			</ul>        		
        	</div>
                <div class="cleaner">&nbsp;</div>
        </div>
        <?php include "../templates/templatemo_footer.php" ?>
	</div>
</body>
</html>