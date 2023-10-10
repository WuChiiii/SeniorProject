<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<div class="modal fade" id="_myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">  
                <div class="alert alert-info"><strong><center>Edit Personal Info</center></strong></div>
            </div>
            <!-- body -->
            <div class="modal-body">
                <!-- form -->
                <?php
                    include "connect.php" ;
                    // $id = $_COOKIE['tid'] ; 
                    $query = $conn -> query("select * from teachers where teacher_name = '" . $_SESSION['name'] . "';") ; 
                    $row = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                    if( $row )
                    {
                        $email = ((array)$row)['teacher_email'] ; 
                        $position = ((array)$row)['teacher_position'] ; 
                        $department = ((array)$row)['teacher_department'] ; 
                    }else{
                        $email = "" ; 
                        $position = "Professor" ; 
                        $department = "CSIE" ; 
                    }
                ?>
                            <form class="form-horizontal" method="post" action="edit_personal_info_database.php" enctype="multipart/form-data">
                                <!-- <div class="alert alert-info"><strong>Account Info</strong> </div> 
                                <hr> -->
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Email</label>
                                        <div class="controls">
                                            <input type="email" name="email" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $email ; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Position</label>
                                        <div class="controls">
                                            <input type="text"  name="position" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $position ; ?>" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Department</label>
                                        <div class="controls">
                                            <input name="department" type="text" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $department ; ?>" required>
                                        </div>
                                    </div>
								<hr/>

                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<span><a href = "prof_my_info.php" class = "btn btn-danger">Back</a></span>
                                    </div>
                                </div>
                            </form>

            </div>
        </div>		  									  
    </div>
</div>