<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">  
                <div class="alert alert-info"><strong><center>Add Teacher</center></strong></div>
            </div>
            <!-- body -->
            <div class="modal-body">
                <!-- form -->
                *** It's recommended to only add the professors from other departments.
                You cannot create an account with the same professor name unless you delete his/her record in teacher section.***
                <form  method="post" enctype="multipart/form-data" action="add_teacher_database.php"> <hr>			
				    <div class="control-group">
                        <label class="control-label" for="inputEmail">Name</label>
                        <input type="text" name="name" pattern="[^'\\\x22;]*" class = "form-control" placeholder="e.g.Brian Koo">       
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Email</label>
                        <div class="controls">
                            <input type="text" class="form-control" pattern="[^'\\\x22;]+[@][^'\\\x22;]+" name="email" placeholder="e.g.abc123@gmail.com" required>
                        </div>
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Position</label>
                            <div class="controls">
                                <input type="text" name="position" pattern="[^'\\\x22;]*" class="form-control" placeholder="e.g.Prof." >
                            </div>
                    </div>

					<div class="control-group">
                        <label class="control-label" for="inputPassword">Department</label>
                        <div class="controls">
                        <input type="text" name="department" pattern="[^'\\\x22;]*" class="form-control" placeholder="CSIE" required>
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