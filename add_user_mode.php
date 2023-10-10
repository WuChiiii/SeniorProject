<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">  
                <div class="alert alert-info"><strong><center>Add User</center></strong></div>
            </div>
            <!-- body -->
            <div class="modal-body">
                <!-- form -->
                <form  method="post" enctype="multipart/form-data" action="add_user_database.php"> <hr>			
				    <div class="control-group">
                        <label class="control-label" for="inputEmail">Name</label>
                        <input type="text" name="name" pattern="[^'\\\x22;]*" class="form-control" placeholder="e.g.Brian Koo" required>       
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Department</label>
                        <div class="controls">
                            <input type="text" class="form-control" pattern="[^'\\\x22;]*" name="department" placeholder="e.g.CSIE">
                        </div>
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Account</label>
                            <div class="controls">
                                <input type="text" name="account" pattern="[^'\\\x22;]*" class = "form-control" placeholder="e.g.brian_koo123" required>
                            </div>
                    </div>

					<div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                        <input type="password" name="password" class="form-control" pattern="[^'\\\x22;]*" placeholder="e.g.briankoo@123" required>
                        </div>              
                     </div>

                              
					<div class = "modal-footer">
						<button name = "go" type="submit" class="btn btn-primary" >Save</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
							
									
			    </form>  

            </div>
        </div>		  									  
    </div>
</div>