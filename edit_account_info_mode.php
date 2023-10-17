<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">  
                <div class="alert alert-info"><strong><center>Edit Account Info</center></strong></div>
            </div>
            <!-- body -->
            <div class="modal-body">
                <!-- form -->
                <?php
                    include "connect.php" ;
                    $id = $_SESSION['id'] ; 
                    $sql = "select * from users where userid = " . $id . ";" ; 
                    $query = $conn -> query( $sql ) ; 
                    $cur = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                    $name = ((array)$cur)['name'] ;
                    $department = ((array)$cur)['department'] ;
                    $account = ((array)$cur)['account'] ;   
                ?>
                            <form class="form-horizontal" method="post" action="edit_account_info_database.php" enctype="multipart/form-data">
                                <!-- <div class="alert alert-info"><strong>Account Info</strong> </div> 
                                <hr> -->
                                    <!-- <div class="control-group">
                                        <label class="control-label" for="inputPassword">Name</label>
                                        <div class="controls">
                                            <input type="text" name="name" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $cur['name'] ; ?>" required>
                                        </div>
                                    </div> 
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Department</label>
                                        <div class="controls">
                                            <input type="text" name="department" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $cur['department'] ; ?>">
                                        </div>
                                    </div>-->
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Account</label>
                                        <div class="controls">
                                            <input type="text"  name="account" pattern="[^'\\\x22;]*" class ="form-control" value="<?php echo $cur['account'] ; ?>" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Old Password</label>
                                        <div class="controls">
                                            <input name="old_password" type="password" pattern="[^'\\\x22;]*" class ="form-control" value="<?php /*echo $cur['hash'] ;*/?>" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">New Password</label>
                                        <div class="controls">
                                            <input name="new_password" type="password" pattern="[^'\\\x22;]*" class ="form-control" value="<?php /*echo $cur['hash'] ;*/?>" required>
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