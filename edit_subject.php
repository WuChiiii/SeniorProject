<?php include ('session.php');?>	
<?php
include('header.php');
$id = $_COOKIE['subject_id'] ; 
//echo "<script> console.log($id);</script>" ; 
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
                <a class="navbar-brand" href="index.html">subject </a>
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
                                $sql = 'select * from subject where subjectid = ' . $id . ';' ; 
                                $query = $conn -> query($sql) ; 
                                $cur = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                            ?>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action = "edit_subject_database.php">
                                <div class="alert alert-info"><strong>Edit Subject</strong> </div>
                                <hr>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Subject Code</label>
                                        <div class="controls">
                                            <input type="text" name="subject_code" class ="form-control" value="<?php echo $cur['subject_code'] ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Subject Title</label>
                                        <div class="controls">
                                            <input type="text" name="subject_title" class ="form-control" value="<?php echo $cur['subject_title'] ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Category</label>
                                        <div class="controls">
                                            <input type="text" name="subject_category" class ="form-control" value="<?php echo $cur['subject_category']?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Semester</label>
                                        <div class="controls">
                                            <input type="text" name="semester" class ="form-control" value="<?php echo $cur['semester'] ?>">
                                        </div>
                                    </div>
								<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<span><a href = "forsubject.php" class = "btn btn-danger"> Back</a></span>
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