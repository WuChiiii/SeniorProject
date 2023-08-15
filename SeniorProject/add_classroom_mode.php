<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">  
                <div class="alert alert-info"><strong><center>Add Classroom</center></strong></div>
            </div>
            <!-- body -->
            <div class="modal-body">
                <!-- form -->
                <form  method="post" enctype="multipart/form-data" action="add_classroom_database.php"> <hr>			
				    <div class="control-group">
                        <label class="control-label" for="inputEmail">Classroom No.</label>
                        <input type="text" name="classroom_no" class = "form-control" placeholder="B101">       
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Department</label>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="classroom_dept"  placeholder="CSIE" >
                        </div>
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Description</label>
                            <div class="controls">
                                <input type="text" name="classroom_desc" class = "form-control" placeholder="Intoduction to CS">
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