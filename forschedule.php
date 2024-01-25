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
                            <!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Add Schedule
                            </button> -->
                            <form action="add_schedule.php" method="post">
                                <button type="submit" class="btn btn-primary btn-lg" name="add_schedule_submit">
                                    Add Schedule
                                </button>
                            </form
                            <br></br>
                             View:	
                            <a href="table_semester.php" target="_blank">
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#room">
                             課程表
                            </button>	
                            </a>
                            <a href="table_pre1.php" target="_blank">
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#room">
                             歷史課表1
                            </button>	
                            </a>
                            <a href="table_pre2.php" target="_blank">
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#room">
                             歷史課表2
                            </button>	
                            </a>
                            <a href="table_pre3.php" target="_blank">
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#room">
                             歷史課表3
                            </button>	
                            </a>
                            <a href="table_pre4.php" target="_blank">
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#room">
                             歷史課表4
                            </button>	
                            </a>
                        </h1>
						<?php include ('add_schedule_mode.php');?>
                                              
						
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
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#archive">
                             Archive Data
                            </button>
							<?php include ('archive.php');?>s
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
