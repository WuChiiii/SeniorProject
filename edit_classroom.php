<?php include ('session.php');?>	
<?php
include('header.php');
$id = $_COOKIE['classroom_id'];
?>
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
                <a class="navbar-brand" href="index.html">classroom </a>
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
       <?php include ('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner" style="position:absolute;left:30%;top:20%;">
			 <div class="row">
                    <div class="col-md-5 well">
                        <div class="hero-unit-table">   
                          <div class="hero-unit-table">   
                            <?php include ('connect.php');
                            // get data from database
                                $sql = "select * from classroom where classroomid = " . $id . " ;" ; 
                                $query = $conn -> query( $sql ) ; 
                                $cur = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                                if( !$cur ) header('Location:forclassroom.php') ; 
                            ?>
                            <form class="form-horizontal" method="post" action = "edit_classroom_database.php" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit Classroom</strong> </div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Classroom No.</label>
                                    <div class="controls">
                                        <input type="text" name="classroom_no" class ="form-control" value="<?php echo $cur['classroom_no'] ; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Department</label>
                                    <div class="controls">
                                        <input type="text"  name="classroom_dept"  class ="form-control" value="<?php echo $cur['classroom_dept'] ; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Description</label>
                                    <div class="controls">
                                        <input type="text"  name="classroom_desc"  class ="form-control" value="<?php echo $cur['classroom_desc'] ; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">No. of Seats</label>
                                    <div class="controls">
                                        <input type="text"  name="classroom_no_seat"  class ="form-control" value="<?php echo $cur['classroom_no_seat'] ; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Classroom Type</label>
                                    <div class="controls">
                                        <input type="text"  name="classroom_type"  class ="form-control" value="<?php echo $cur['classroom_type'] ; ?>">
                                    </div>
                                </div>

									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<span><a href = "forclassroom.php" class = "btn btn-danger"> Back</a></span>
                                    </div>
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