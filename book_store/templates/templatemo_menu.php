<div id="templatemo_menu">
	<ul>
                <li>
                        <a <?php if($open_page==="index") echo('class="active_page"'); ?> href="../pages/index.php" >Home
                        </a>
                </li>
                <li>
                        <a <?php if($open_page==="search") echo('class="active_page"'); ?> href="search.php" >Search
                        </a>
                </li>
                <li>
                        <a <?php if($open_page==="books") echo('class="active_page"'); ?> href="books.php" >Books
                        </a>
                </li>            
                <li>
                        <a <?php if($open_page==="new_releases") echo('class="active_page"'); ?> href="new_releases.php" >Latest
                        </a>
                </li>
                <li>
                        <a <?php if($open_page==="contacts") echo('class="active_page"'); ?> href="contacts.php" >Contact
                        </a>
                </li>
                <li>
                        <a <?php if($open_page==="developer") echo('class="active_page"'); ?> href="developer.php" >Developers
                        </a>
                </li>
                <?php 
                        if(!isset($_SESSION['userid']))
                        {
                                echo "<li><a ";
                                if($open_page==="login")
                                        echo('class="active_page"');
                                echo "href=\"login.php\" >Login</a></li>";
                        }
                        else
                        {
                                echo "<li><a ";
                                if($open_page==="logout")
                                        echo('class="active_page"');
                                echo "href=\"../functions/logout.php\" >Logout</a></li>";
                        }
                 ?>
                <?php 
                        if(!isset($_SESSION['userid']))
                        {
                                echo "<li><a ";
                                if($open_page==="register")
                                        echo('class="active_page"');
                                echo "href=\"register.php\" >Register</a></li>";
                        }
                 ?>
	</ul>
</div> <!-- end of menu -->
