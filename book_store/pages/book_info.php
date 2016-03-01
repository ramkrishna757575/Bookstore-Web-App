<?php $open_page="books"; session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>BookStore Automation System</title>
        <link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <div id="templatemo_container">        	
                <?php include "../templates/templatemo_menu.php"; ?>
                <?php include "../templates/templatemo_header.php"; ?>
                 <?php include_once "../functions/session_mon.php"; ?>
                <div id="templatemo_content">
                    <?php include "../templates/templatemo_content_left.php"; ?> 
                    
                <div id="templatemo_content_right">
                	
                    <h1>Book Title <span>(by author name)</span></h1>
                    <div class="image_panel">
                        <img src="../images/templatemo_image_02.jpg" alt="Image Description" width="100" height="150" />
                    </div>            
                    <h2>Some small description about the book...</h2>
                    <ul>
        	            <li>By (Author First Name) <a href="#">(Author Last Name)</a></li>
                    	<li>(Publishing Date)</li>
                        <li>Pages: (No. of Pages)</li>
                        <li>ISBN :(ISBN no.)</li>
                    </ul>      

                    <p>Detailed Description of the book. Preferably mentioned in few paragraphs.</p>

                     <div class="cleaner_with_height">&nbsp;</div>
                    
                    <a href="index.php"><img src="../images/templatemo_ads.jpg" alt="css template ad" /></a>
                    
                </div> <!-- end of content right -->
            
            	<div class="cleaner_with_height">&nbsp;</div>
            </div> <!-- end of content -->
            
            <?php include "../templates/templatemo_footer.php"; ?>

        </div> <!-- end of container -->
    </body>
</html>