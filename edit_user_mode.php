<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php"; ?>
<div class="modal fade" id="modal_edit_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">  
                <div class="alert alert-info"><strong><center>Edit User</center></strong></div>
            </div>
            <!-- body -->
            <div class="modal-body">
                <!-- form -->
                <?php include ('connect.php');
                            // get data from database
                                $id = $_COOKIE['userid'] ; 
                                $sql = "select * from users where userid = " . $id . " ;" ; 
                                //echo $sql ; 
                                //var_dump( $_COOKIE ) ; 
                                $query = $conn -> query( $sql ) ; 
                                $cur = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                                if( !$cur ) echo "<script> location.href = 'foruser.php' ; </script>" ; 
                            ?>
                            <form class="form-horizontal" method="post" action="edit_user_database.php" enctype="multipart/form-data">
                                <strong>* indicates required</strong>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Name(readonly)</label>
                                    <div class="controls">
                                        <input type="text" name="name" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $cur['name'] ; ?>" required readonly>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Department(readonly)</label>
                                    <div class="controls">
                                        <input type="text" name="department" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $cur['department'] ; ?>" required readonly>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Account*</label>
                                    <div class="controls">
                                        <input type="text"  name="account" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $cur['account'] ; ?>" required>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Password*</label>
                                    <div class="controls">
                                        <input name="password" type="password" pattern="[^'\\\x22;]*" class ="form-control" value="<?php /*echo $cur['hash'] ;*/?>" required>
                                    </div>
                                </div>
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<span><a href = "foruser.php" class = "btn btn-danger"> Back</a></span>
                                    </div>
                                </div>
                            </form>
            </div>
        </div>		  									  
    </div>
</div>
