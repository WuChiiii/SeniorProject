<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

					 <li>
                        <a href="home3.php"><i class="fa fa-home"></i> Home </a>
						
                    </li>
                    <li>
                        <a href="forteacher.php"><i class="fa fa-user"></i> Teachers </a>

                    </li>
					<!--<li>
                        <a href="forsubject.php"><i class="fa fa-th"></i> Subject</a>
                    </li>-->
                    <li>
                        <a href="forclassroom.php"><i class="fa fa-inbox"></i> Classroom </a>
                    </li>
                    <li>
                        <a href="forcourseselection.php"><i class="fa fa-th"></i> Course Selection </a>
                    </li>
                    </li>
					<li>
                        <a href="forschedule.php"><i class="fa fa-table"></i> Timetable </a>
                    </li>
					<li>
                        <a href="foruser.php"><i class="fa fa-users"></i> User Account </a>
                    </li>
					   <li>
                        <a href="logout.php"><i class="fa fa-power-off"></i> Log out </a>
                    </li>
                 
                </ul>

            </div>

        </nav>