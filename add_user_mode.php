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
                        <input type="text" name="name" class = "form-control" placeholder="Brian Koo">       
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Department</label>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="department"  placeholder="CSIE" >
                        </div>
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Username</label>
                            <div class="controls">
                                <input type="text" name="username" class = "form-control" placeholder="brian_koo123">
                            </div>
                    </div>

					<div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                        <input type="text" name="password" class = "form-control" placeholder="briankoo@123">
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