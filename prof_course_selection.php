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
                <a class="navbar-brand" href="#	">Course Selection</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      						
                    Welcome : <?php echo "Professor " . $_SESSION['name'] //. $_SESSION['page_mode']?>
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
                                Add Course
                            </button>
						
                        </h1>
						<?php include ('add_course_mode.php');?>
						
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
                                        <th>Action</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <?php include('connect.php');
                                    //display the data of subjects from database
                                        $query = $conn -> query( "select * from courses" ) ; 
                                        $r = $query -> fetchAll( PDO::FETCH_ASSOC ) ;
                                        foreach( $r as $data ):
                                    ?>
                                        <tr class="warning"> 
                                            <td><?php echo $data['courseName'] ?></td>
                                            <td><?php echo $data['courseNumber'] ?></td>
                                            <td><?php echo $data['credit'] ?></td>
                                            <td><?php echo $data['period'] ?></td>    
                                            <td><?php echo $data['semester'] ?></td>   
                                            <td><?php echo $data['groupType'] ?></td>    
                                            <td><?php echo $data['classType'] ?></td>
                                            <td><?php echo $data['remarks'] ?></td>
                                            <td><?php echo $data['program'] ?></td>
                                            <td width="160" >
                                                <!-- <h1><?php echo $data['id'] ?></h1> -->
                                                <a value = "<?php echo $data['id'] ?>" onclick="select_course(this);" class="btn btn-success" role="botton"><i class="icon-pencil icon-large"></i>&nbsp;Select</a>
                                                <div style="font-size:13px;"><em> * You can specify the Maximum of students and the classroom type after selecting</em> </div>
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
    <script>
        function select_course(elem)
        {
            var course_id = ( elem.getAttribute( 'value' ) ).toString() ; 
            //document.cookie='subject_id='+subject_id; 
            var exp = new Date() ; 
            exp.setTime( exp.getTime() + 1000 * 600 ) ; 
            exp = exp.toString() ; 
            document.cookie='course_id='+course_id+';expires=' + exp + ';path=/;' ; 
            location.href='select_course_database.php'; 
        }
    </script>
</body>

</html>
