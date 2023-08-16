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
                <form  method="post" enctype="multipart/form-data" action="add_teacher_database.php"> <hr>			
				    <div class="control-group">
                        <label class="control-label" for="inputEmail">Name</label>
                        <input type="text" name="name" class = "form-control" placeholder="Brian Koo">       
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Email</label>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="email"  placeholder="abc123@gmail.com" >
                        </div>
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Position</label>
                            <div class="controls">
                                <input type="text" name="position" class = "form-control" placeholder="Prof.">
                            </div>
                    </div>

					<div class="control-group">
                        <label class="control-label" for="inputPassword">Department</label>
                        <div class="controls">
                        <input type="text" name="department" class = "form-control" placeholder="CSIE">
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