<?php include ('session.php');?>	
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
                <a class="navbar-brand" href="#	">Class Schedule</a>
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
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Add Schedule
                            </button>
                            <br></br>
                             View:							
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#teacher">
                             Teacher
                            </button>
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#room">
                             Room
                            </button>
                            
	
                        </h1>
						<?php include ('add_schedule_mode.php');?>
                        <?php include ('teacher_tt.php');?>
                        <?php include ('classroom_tt.php');?>
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Schedule Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Day</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Teacher</th>
                                        <th>Subject Code</th>
										<th>Classroom</th>
										<th>Semester</th>                                      
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <?php include('connect.php');
                                    //display the data of subjects from database
                                        $query = $conn -> query( "select * from schedule" ) ; 
                                        $r = $query -> fetchAll( PDO::FETCH_ASSOC ) ;
                                        foreach( $r as $data ):
                                    ?>
                                        <tr class="warning"> 
                                            <td><?php echo $data['sched_day'] ?></td>
                                            <td><?php echo $data['sched_start'] ?></td>
                                            <td><?php echo $data['sched_end'] ?></td>
                                            <td><?php echo $data['teacher_name'] ?></td>    
                                            <td><?php echo $data['subject_code'] ?></td>   
                                            <td><?php echo $data['classroom_no'] ?></td>    
                                            <td><?php echo $data['semseter'] ?></td>

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
    
</body>

</html>
