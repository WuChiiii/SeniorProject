<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
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
                        <input type="text" name="classroom_no" class = "form-control" pattern="[^'\\\x22;]*" placeholder="e.g.B101" required>       
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Department   ***   ( 資工系必須為"CSIE" )   *** </label>
                        <div class="controls">
                            <input type="text" class = "form-control" name="classroom_dept" value="CSIE" pattern="[^'\\\x22;]*" placeholder="e.g.CSIE" required >
                        </div>
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Description</label>
                            <div class="controls">
                                <input type="text" name="classroom_desc" class = "form-control" pattern="[^'\\\x22;]*" placeholder="e.g.Intoduction to CS">
                            </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputPassword">No. of Seats</label>
                            <div class="controls">
                                <input type="text" name="classroom_no_seat" class = "form-control" pattern="[0-9]+" placeholder="e.g.80" required>
                            </div>
                    </div>
    
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Classroom Type <br>  ***   ( Computer Classroom:1;  General Classroom:0;  Specific Classroom:2 )   ***</label>
                            <div class="controls">
                                <input type="text" name="classroom_type" class = "form-control" pattern="[012]*" placeholder="1:Computer Classroom; 0:General Classroom; 2:Specific Classroom" required>
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