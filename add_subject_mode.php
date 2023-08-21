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
                        <input type="text" name="subject_code" class = "form-control" placeholder="GC__10000">       
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Subject Title</label>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="subject_title"  placeholder="Art" >
                        </div>
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Category</label>
                            <div class="controls">
                                <input type="text" name="subject_category" class = "form-control" placeholder="Elective">
                            </div>
                    </div>

					<div class="control-group">
                        <label class="control-label" for="inputPassword">Semester</label>
                        <div class="controls">
                        <input type="text" name="sub_semester" class = "form-control" placeholder="2B">
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">No. of students</label>
                        <div class="controls">
                        <input type="text" name="subject_no_student" class = "form-control" placeholder="50">
                        </div>              
                     </div>
                
                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Classroom Type</label>
                        <div class="controls">
                        <input type="text" name="subject_classroom_type" class = "form-control" placeholder="0/1">
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Hour</label>
                        <div class="controls">
                        <input type="text" name="subject_hour" class = "form-control" placeholder="3">
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