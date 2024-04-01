<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
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
                <a class="navbar-brand" href="#	">Course Selection</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      						
					  Welcome : Admin
                    </a>
                  
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
       <?php include ('nav_sidebar3.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#adminModal">
                                Add Course
                            </button>
                            
                        </h1>
                        <?php include ('admin_add_course_mode.php');?>

						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Course Selection</strong>
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
                                        <th>Professor</th>
                                        <th>time</th>
                                        <th>domain</th>
                                        <th>classroom</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include('connect.php');
                                    //display the data of subjects from database
                                        $query = $conn -> query( "select * from course_selection" ) ; 
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
                                            <td><?php if( $data['classType'] == 0 ) echo '選(elective) or 支援外系' ; else if( $data['classType'] == 1 ) echo '必(required)' ; else echo $data['classType'] ; ?></td>
                                            <td><?php echo $data['remarks'] ?></td>
                                            <td><?php echo $data['program'] ?></td>
                                            <td><?php if( $data['classroomType'] == 0 ) echo "一般教室 General classroom" ; else if( $data['classroomType'] == 1 ) echo "電腦教室 Computer Classroom";?> </td>
                                            <td><?php echo $data['studentNumber'];?></td>
                                            <td><?php 
                                                    $query = $conn -> query( "select * from teachers where teacherid = " . $data['teacherid'] . ";" ) ; 
                                                    $u = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                                                    echo $u['teacher_name'] ; 
                                                ?>
                                            </td>
                                            <td><?php if( $data['time'] == null ) echo "Not sepecified" ; else echo $data['time']; ?></td>
                                            <td><?php if( $data['priority'] == 0 ) echo "admin" ; else echo "professor"; ?></td>
                                            <td><?php if( $data['classroom'] == null ) echo "Not sepecified" ; else echo $data['classroom']; ?></td>
                                            <td width="160" >
                                                <!--<h1><?php echo $data['id'] ?></h1>-->
                                                <a value = "<?php echo $data['id'] ?>" onclick="delete_subject(this);" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                                <a value = "<?php echo $data['id'] ?>" onclick="edit_subject(this);" class="btn btn-success" role="botton"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
                                            </td>
                                            
                                            
                                    </tr>
                                    <?php  endforeach;
                                    //end of display
                                    ?>
                                    
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
    <script>
        function delete_subject(elem)
        {
            //console.log( elem.getAttribute( 'value' ) ) ; 
            var course_id = ( elem.getAttribute( 'value' ) ).toString() ; 
            //document.cookie='delete_subject_id='+subject_id; 
            var exp = new Date() ; 
            exp.setTime( exp.getTime() + 1000 * 10 ) ; 
            exp = exp.toString() ; 
            document.cookie='course_id='+course_id+';expires=' + exp + ';path=/;' ; 
            if( confirm('Are you sure to delete this course?\n') )
                location.href='delete_subject_database.php';
            else{
                //alert('deletion is canceled') ; 
                location.herf = "forcourseselection.php" ; 
            }
        }
        function edit_subject(elem)
        {
            var course_id = ( elem.getAttribute( 'value' ) ).toString() ; 
            //document.cookie='subject_id='+subject_id; 
            var exp = new Date() ; 
            exp.setTime( exp.getTime() + 1000 * 600 ) ; 
            exp = exp.toString() ; 
            document.cookie='course_id='+course_id+';expires=' + exp + ';path=/;' ;
            // location.href='pre_edit_subject.php';
            location.href='pre_edit_select_admin.php';
        }
    </script>
</body>

</html>
