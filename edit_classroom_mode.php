<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php"; ?>
<div class="modal fade" id="modal_edit_classroom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">  
                <div class="alert alert-info"><strong><center>Edit Classroom</center></strong></div>
            </div>
            <!-- body -->
            <div class="modal-body">
                <!-- form -->
                <?php include ('connect.php');
                            // get data from database
                                $id = $_COOKIE['classroom_id'] ; 
                                $sql = "select * from classroom where classroomid = " . $id . " ;" ; 
                                $query = $conn -> query( $sql ) ; 
                                $cur = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                                if( !$cur ) echo "<script> location.href = 'forclassroom.php' ; </script>" ; 
                            ?>
                            <form class="form-horizontal" method="post" action = "edit_classroom_database.php" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit Classroom</strong> </div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Classroom No.*</label>
                                    <div class="controls">
                                        <input type="text" name="classroom_no" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $cur['classroom_no'] ; ?>" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Department*</label>
                                    <div class="controls">
                                        <input type="text"  name="classroom_dept" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $cur['classroom_dept'] ; ?>" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Description</label>
                                    <div class="controls">
                                        <input type="text"  name="classroom_desc" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $cur['classroom_desc'] ; ?>" >
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">No. of Seats*</label>
                                    <div class="controls">
                                        <input type="text"  name="classroom_no_seat" pattern="[0-9]+" class ="form-control" value="<?php echo $cur['classroom_no_seat'] ; ?>" required>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">ClassroomType*</label>
                                    <br>
                                    <strong>( General Classroom:0; Computer Classroom:1; Specific Classroom:2 )<strong>
                                    <div class="controls">
                                        <input type="text"  name="classroom_type" pattern="[012]" class ="form-control" value="<?php echo $cur['classroom_type'] ; ?>" required>
                                    </div>
                                </div>

                                <div class="control-group">

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
