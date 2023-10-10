<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">  
                <div class="alert alert-info"><strong><center>Add Course</center></strong></div>
            </div>
            <!-- body -->
            <div class="modal-body">
                <!-- form -->
                <form  method="post" enctype="multipart/form-data" action="edit_course_database.php"> <hr>			
				    <div class="control-group">
                        <label class="control-label" for="inputEmail">Course Name</label>
                        <input type="text" name="SCourse_Name" class = "form-control" pattern="[^'\\\x22;]*" placeholder="e.g.Calculus" required>       
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Course Number</label>
                        <div class="controls">
                            <input type="text" class = "form-control" pattern="[^'\\\x22;]*" name="SCourse_Number" placeholder="e.g.GC__10000" required>
                        </div>
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Credit   ***   An integer in [0, 9]   ***</label>
                            <div class="controls">
                                <input type="text" name="SCredit" pattern="[0-9]+[.]*[0-9]*" class = "form-control" placeholder="e.g.3" required>
                            </div>
                    </div>

					<div class="control-group">
                        <label class="control-label" for="inputPassword">Period(hr)   ***   an integer in [0, 9]   ***</label>
                        <div class="controls">
                        <input type="text" name="SPeriod" pattern = "[0-9]" class = "form-control" value="<?php echo $cur['period'] ;?>" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Semester</label>
                        <div class="controls">
                        <input type="text" name="SSemester" pattern="[^'\\\x22;]*" class = "form-control" placeholder="e.g.一上" required>
                        </div>              
                     </div>
                
                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Group Type   ***   Local Group:1;   International Group:0   ***</label>
                        <div class="controls">
                        <input type="text" name="SGroup_Type" pattern="[01]" class = "form-control" placeholder="e.g.0" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Class Type   ***   1:必(Required)/0:選(elective)   ***</label>
                        <div class="controls">
                        <input type="text" name="SClass_Type" pattern="[01]*" class = "form-control" placeholder="e.g.1" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Remarks</label>
                        <div class="controls">
                        <input type="text" name="SRemarks" pattern="[^'\\\x22;]*" class = "form-control" placeholder="e.g.研究所課程 Graduate Level">
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Program</label>
                        <div class="controls">
                        <input type="text" name="SProgram" pattern="[^'\\\x22;]*" class = "form-control" placeholder="e.g.機器學習 Machine Learning">
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Classroom Type   ***   Computer Classroom:1;    0:Otherwise   ***</label>
                        <div class="controls">
                        <input type="text" name="SClassroom_Type" pattern="[01]" class = "form-control" placeholder="Computer Classroom:1; 0:Otherwise" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Student Number</label>
                        <div class="controls">
                        <input type="text" name="SStudent_Number" pattern="[0-9]+" class = "form-control" placeholder="e.g.80" required>
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