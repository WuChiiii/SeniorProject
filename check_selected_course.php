<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php include('header.php');?>
<!DOCTYPE html>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle nav</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Course Selection</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      						
					    Welcome : <?php echo "Professor " . $_SESSION['name'] ?>
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
            <div id="page-inner" style="position:absolute;left:30%;top:20%;">
			 <div class="row">
                    <div class="col-md-5 well">
                        <div class="hero-unit-table">   
                          <div class="hero-unit-table">   
                            <div class="alert alert-info"><strong><center>Check The Selected Course</center></strong></div>
                            <strong>***You can specify the classroom type and the number of students or edit other info***</strong>
                            <?php include ('connect.php');
                            // get data from database
                                $id = $_COOKIE['course_id'] ; 
                                $sql = "select * from course_selection where id = " . $id . " ;" ; 
                                $query = $conn -> query( $sql ) ; 
                                $cur = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                            ?>
                <form  method="post" enctype="multipart/form-data" action="edit_course_database.php"> <hr>			
				    <div class="control-group">
                        <label class="control-label" for="inputEmail">Course Name</label>
                        <input type="text" name="SCourse_Name" class = "form-control" pattern="[^'\\\x22;]*" value="<?php echo $cur['courseName'] ?>" required>       
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Course Number</label>
                        <div class="controls">
                            <input type="text" class = "form-control" pattern="[^'\\\x22;]*" name="SCourse_Number" value="<?php echo $cur['courseNumber']; ?>" required>
                        </div>
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Credit   ***   An integer in [0, 9]   ***</label>
                            <div class="controls">
                                <input type="text" name="SCredit" pattern="[0-9]+[.]*[0-9]*" class = "form-control" value="<?php echo $cur['credit'] ;?>" required>
                            </div>
                    </div>

					<div class="control-group">
                        <label class="control-label" for="inputPassword">Period(hr)   ***   an integer in [0, 9]   ***</label>
                        <div class="controls">
                        <input type="text" name="SPeriod" pattern = "[0-9]" class = "form-control" value="<?php echo $cur['period'] ;?>" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Semester ( 1A:一上 ; 1B:一下 ; 2A:二上 ; 2B:二下 ; 3A:三上 ; 3B:三下 ; 4A:四上 ; 4B:四下 )</label>
                        <div class="controls">
                        <input type="text" name="SSemester" pattern="[1234][AB]" class = "form-control" value="<?php echo $cur['semester'] ;?>" required>
                        </div>              
                     </div>
                
                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Group Type   ***   Local Group:1;   International Group:0   ***</label>
                        <div class="controls">
                        <input type="text" name="SGroup_Type" pattern="[01]" class = "form-control" value="<?php if( $cur['groupType'] == 'International Group' ) echo 0 ; else if( $cur['groupType'] == 'Local Group' ) echo 1 ; else echo $cur['groupType'] ;?>" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Class Type   ***   1:必(Required)/0:選(elective) or 支援外系  ***</label>
                        <div class="controls">
                        <input type="text" name="SClass_Type" pattern="[01]*" class = "form-control" value="<?php if( $cur['classType'] == '選(elective)' ) echo 0 ; else if( $cur['classType'] == '必(required)' ) echo 1 ; else echo $cur['classType'] ;?>" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Remarks</label>
                        <div class="controls">
                        <input type="text" name="SRemarks" pattern="[^'\\\x22;]*" class = "form-control" value="<?php echo $cur['remarks'] ?>">
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Program</label>
                        <div class="controls">
                        <input type="text" name="SProgram" pattern="[^'\\\x22;]*" class = "form-control" value="<?php echo $cur['program'] ?>">
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Classroom Type   ***   Computer Classroom:1;    0:Otherwise   ***</label>
                        <div class="controls">
                        <input type="text" name="SClassroom_Type" pattern="[01]" class = "form-control" value="<?php echo $cur['classroomType'] ;?>" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Student Number</label>
                        <div class="controls">
                        <input type="text" name="SStudent_Number" pattern="[0-9]+" class = "form-control" value="<?php echo $cur['studentNumber'] ?>" required>
                        </div>              
                     </div>
                              
					<div class = "modal-footer">
						<button name = "go" type="submit" class="btn btn-primary" >Save</button>
                        <a href = 'prof_course_selection.php'>
						    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel Modification</button>
                        </a>
                    </div>
									
			    </form>  

                        </div>
                        </div>
                        </div>
                    </div>
                </div> 
                
				
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
   <?php include ('script.php');?>
</body>
</html>