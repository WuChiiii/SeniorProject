<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

					<li>
                        <a href="home.php"><i class="fa fa-home"></i> Home</a>	
                    </li>
                    <li>
                        <a href="prof_course_selection.php"><i class="fa fa-th"></i> Course Selection </a>
                    </li>
                    <li>
                        <a href="prof_my_selection.php"><i class="fa fa-inbox"></i> My Selection </a>
                    </li>
					<li>
                        <a href="prof_my_info.php"><i class="fa fa-user"></i> My Info </a>
                    </li>

                    </li>
					    <li>
                        <a href="index.php"><i class="fa fa-power-off"></i> Log out </a>
                    </li>
                 
                </ul>

            </div>

        </nav>