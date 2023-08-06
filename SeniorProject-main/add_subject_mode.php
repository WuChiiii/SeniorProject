<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">  
                <div class="alert alert-info"><strong><center>Add Subject</center></strong></div>
            </div>
            <!-- body -->
            <div class="modal-body">
                <!-- form -->
                <form  method="post" enctype="multipart/form-data" action="add_subject_database.php"> <hr>			
				    <div class="control-group">
                        <label class="control-label" for="inputEmail">Subject Code</label>
                        <input type="text" name="subject_code" class = "form-control" placeholder="Name">       
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Subject Title</label>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="subject_title"  placeholder="Description" >
                        </div>
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Category</label>
                            <div class="controls">
                                <input type="text" name="subject_category" class = "form-control" placeholder="">
                            </div>
                    </div>

					<div class="control-group">
                        <label class="control-label" for="inputPassword">Semester</label>
                        <div class="controls">
                        <input type="text" name="sub_semester" class = "form-control" placeholder="">
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