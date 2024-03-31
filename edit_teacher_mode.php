<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php"; ?>
<div class="modal fade" id="modal_edit_teacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">  
                <div class="alert alert-info"><strong><center>Edit Teacher</center></strong></div>
            </div>
            <!-- body -->
            <div class="modal-body">
                <!-- form -->
                <?php include ('connect.php');
                            // get data from database
                                $id = $_COOKIE['teacher_id'] ; 
                                $sql = "select * from teachers where teacherid = " . $id . " ;" ; 
                                $query = $conn -> query( $sql ) ; 
                                $cur = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                                if( !$cur ) echo "<script> location.href = 'forteacher.php'; </script>" ; 
                            ?>
                            <form class="form-horizontal" method="post" action="edit_teacher_database.php" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit Teacher</strong> </div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Name</label>
                                    <div class="controls">
                                        <input type="text" name="teacher_name" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $cur['teacher_name'] ; ?>" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Email</label>
                                    <div class="controls">
                                        <input type="text" name="teacher_email" pattern="[^'\\\x22;]*[@][^'\\\x22;]*" class="form-control" value="<?php echo $cur['teacher_email'] ; ?>" required>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Position</label>
                                    <div class="controls">
                                        <input type="text"  name="teacher_position" pattern="[^'\\\x22;]*" class="form-control" value="<?php echo $cur['teacher_position'] ; ?>">
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Department</label>
                                    <div class="controls">
                                        <input type="text"  name="teacher_department" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $cur['teacher_department'] ; ?>" required>
                                    </div>
                                </div>
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<span><a href = "forteacher.php" class = "btn btn-danger"> Back</a></span>
                                    </div>
                                </div>
                            </form>
            </div>
        </div>		  									  
    </div>
</div>