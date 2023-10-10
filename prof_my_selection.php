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
                      						
                    Welcome : <?php echo "Professor " . $_SESSION['name'] . $_SESSION['page_mode'] ?>
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
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              ...
                            </button>
						
                        </h1>
						<?php //include ('.php');?>
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;My Selection</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Number</th>
										<th>Credit</th>
										<th>Period</th>
                                        <th>Semester</th>
                                        <th>Group Type</th>
                                        <th>Class Type</th>
                                        <th>Remarks</th>
                                        <th>Program</th>
                                        <th>Classroom Type</th>
                                        <th>Student Number</th>
                                        <th>Action</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <?php include('connect.php');
                                    //display the data of subjects from database
                                        $query = $conn -> query( "select * from course_selection where userid = " . $_SESSION['id'] . ";" ) ; 
                                        $r = $query -> fetchAll( PDO::FETCH_ASSOC ) ;
                                        foreach( $r as $data ):
                                    ?>
                                        <tr class="warning"> 
                                            <td><?php echo $data['courseName'] ?></td>
                                            <td><?php echo $data['courseNumber'] ?></td>
                                            <td><?php echo $data['credit'] ?></td>
                                            <td><?php echo $data['period'] ?></td>    
                                            <td><?php echo $data['semester'] ?></td>   
                                            <td><?php if( $data['groupType'] == 0 ) echo'國際組 International Group' ; else if( $data['groupType'] == 1 ) echo '資工組 Local Group' ; else echo $data['groupType'] ; ?></td>    
                                            <td><?php if( $data['classType'] == 0 ) echo '選(elective)' ; else if( $data['classType'] == 1 ) echo '必(required)' ; else echo $data['classType'] ; ?></td>
                                            <td><?php echo $data['remarks'] ?></td>
                                            <td><?php echo $data['program'] ?></td>
                                            <td><?php if( $data['classroomType'] == 0 ) echo "未指定 Not sepecified" ; else echo "電腦教室 Computer Classroom";?> </td>
                                            <td><?php echo $data['studentNumber'];?></td>
                                            <td width="160" >
                                                <h1><?php echo $data['id'] ?></h1>
                                                <a value = "<?php echo $data['id'] ?>" onclick="deselect(this);" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Deselect</a>
                                                <a value = "<?php echo $data['id'] ?>" onclick="edit_course(this);" class="btn btn-success" role="botton"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;
                                    //end of display
                                    ?>

                                <?php ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
                
				
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
   <?php include ('script.php');?>
   <?php include "edit_selected_course_mode.php" ; ?> 
    <script>
        function deselect(elem)
        {
            var course_id = ( elem.getAttribute( 'value' ) ).toString() ; 
            //document.cookie='subject_id='+subject_id; 
            var exp = new Date() ; 
            exp.setTime( exp.getTime() + 1000 * 10 ) ; 
            exp = exp.toString() ; 
            document.cookie='course_id='+course_id+';expires=' + exp + ';path=/;' ; 
            if( confirm('Are you sure to deselect this course?') )
            {
                location.href='deselect_course_database.php' ; 
            }else{
                location.href='prof_my_selection.php' ; 
            }
        }
        function edit_course(elem)
        {
            var course_id = ( elem.getAttribute('value') ).toString() ; 
            var exp = new Date() ; 
            exp.setTime( exp.getTime() + 1000 * 60 ) ;
            exp = exp.toString() ; 
            document.cookie='course_id='+course_id+';expires=' + exp + ';path=/;' ; 
            $("#modal_edit_course").modal("show") ;
            //location.href='edit_selected_course_mode.php'; 
        }
    </script>
</body>

</html>
