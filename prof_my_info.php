<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php include ('header.php');?>	
<link href="img/ndhu1.png" rel="icon" type="image"> 

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#	">My Selection</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      						
                    Welcome : <?php $_SESSION['page_mode'] = 1 ; echo "Professor " . $_SESSION['name'] . $_SESSION['page_mode']; ?>
                    </a>
                  
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
       <?php include ('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                    <button class="btn btn-block btn-lg" style="background-color:#13102e;color:white;" onmouseover="change_color(this);" onmouseout="recover_color(this);" data-toggle="modal" data-target="#myModal">
                        Edit Account Info
                    </button>
                    <?php include "edit_account_info_mode.php" ?>
                    <div> &nbsp </div>
                <div class="alert alert-info">
                    <strong><i class="icon-user icon-large"></i>&nbsp;Account Info</strong>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Account</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $_SESSION['name'];?></td>
                            <td><?php echo $_SESSION['account'];?></td>
                            <td><?php echo $_SESSION['department'];?></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-block btn-lg" style="background-color:#13102e;color:white;" onmouseover="change_color(this);" onmouseout="recover_color(this);" data-toggle="modal" data-target="#_myModal">
                    Edit Personal Info
                </button>
                <?php include "edit_personal_info_mode.php" ;?>
                <div> &nbsp </div>
                    *It can be seen by the CSIE department 
                <?php
                    include "connect.php" ; 
                    $query = $conn -> query("select * from teachers where teacher_name = '" . $_SESSION['name'] . "';") ; 
                    $row = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                    if( !$row ):
                ?>
                    <div> &nbsp </div>
                    <div>
                        <span class="alert alert-success" role="alert">
                            You  haven't  create  your  personal  info !  
                            <a data-toggle="modal" data-target="#_myModal"> &nbsp create one ? </a>
                        </span>
                        
                    </div>
                <?php
                        //setcookie("tid", 0, time() + 600, "/");
                    endif ; 
                    if( $row ):
                        //setcookie("tid", ((array)$row)['teacherid'] , time() + 600, "/");
                ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $_SESSION['name'];?></td>
                                    <td><?php echo ((array)$row)['teacher_email'];?></td>
                                    <td><?php echo ((array)$row)['teacher_position'];?></td>
                                    <td><?php echo ((array)$row)['teacher_department'];?></td>
                                </tr>
                            </tbody>
                        </table>
                <?php
                    endif ;
                ?>
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->
   <?php include ('script.php');?>
    <script>
        function select_course(elem)
        {
            var course_id = ( elem.getAttribute( 'value' ) ).toString() ; 
            //document.cookie='subject_id='+subject_id; 
            var exp = new Date() ; 
            exp.setTime( exp.getTime() + 1000 * 600 ) ; 
            exp = exp.toString() ; 
            document.cookie='course_id='+course_id+';expires=' + exp + ';path=/;' ; 
            location.href='edit_selected_course_mode.php'; 
        }
        function change_color(elem)
        {
            elem.style.backgroundColor = "#3e3c52" ; 
        }
        function recover_color(elem)
        {
            elem.style.backgroundColor = "#13102e"
        }
    </script>
</body>

</html>
