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
                The course will be added to your selection, see in 'My Selection'.
                <br/>
                <strong>* indicates required</strong>
                <form  method="post" enctype="multipart/form-data" action="add_course_database.php"> <hr>			
				    
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Course Name*</label>
                        <input type="text" name="Course_Name" class = "form-control" pattern="[^'\\\x22;]*" placeholder="e.g.Calculus" required>       
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Course Number</label>
                        <div class="controls">
                            <input type="text" class = "form-control" pattern="[^'\\\x22;]*" name="Course_Number" placeholder="e.g.GC__10000">
                        </div>
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Credit<br>(An integer in [0, 9])</label>
                            <div class="controls">
                                <input type="text" name="Credit" pattern="[0-9]+[.]*[0-9]*" class = "form-control" placeholder="e.g.3">
                            </div>
                    </div>

					<div class="control-group">
                        <label class="control-label" for="inputPassword">Period(hr)*<br>(an integer in [0, 9])</label>
                        <div class="controls">
                        <input type="text" name="Period" pattern = "[0-9]" class = "form-control" placeholder="e.g.3" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Semester* <br>( 1A:一上 ; 1B:一下 ; 2A:二上 ; 2B:二下 ; 3A:三上 ; 3B:三下 ; 4A:四上 ; 4B:四下 )</label>
                        <div class="controls">
                        <input type="text" name="Semester" pattern="[1234][AB]" class = "form-control" placeholder="e.g.3B" required>
                        </div>              
                     </div>
                
                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Group Type*<br>Local Group:1;International Group:0)</label>
                        <div class="controls">
                        <input type="text" name="Group_Type" pattern="[01]" class = "form-control" placeholder="e.g.0" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Class Type*<br>(1:必(Required); 0:選(elective) or 支援外系)</label>
                        <div class="controls">
                        <input type="text" name="Class_Type" pattern="[01]*" class = "form-control" placeholder="e.g.1" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Remarks</label>
                        <div class="controls">
                        <input type="text" name="Remarks" pattern="[^'\\\x22;]*" class = "form-control" placeholder="e.g.研究所課程 Graduate Level">
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Program</label>
                        <div class="controls">
                        <input type="text" name="Program" pattern="[^'\\\x22;]*" class = "form-control" placeholder="e.g.機器學習 Machine Learning">
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Classroom Type* <br>(General Classroom:0; Computer Classroom:1; Specific Classroom:2)</label>
                        <div class="controls">
                        <input type="text" name="Classroom_Type" pattern="[012]" class = "form-control" placeholder="e.g.0" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Classroom(NOT required)</label>
                        <?php
                        
                            include "connect.php" ;
                            try{
                                // 擷取資料
                                $sql = 'select * from classroom;';
                                $result = $conn->query($sql);

                                // 生成下拉式選單
                                echo '<select name="Classroom" class="form-control">';
                                echo '<option></option>';
                                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<option>' . $row['classroom_no'] . '</option>';
                                }

                                echo '</select>';

                                // 釋放結果集
                               
                            }
                            catch( PDOException $e ){
                                echo $e ; 
                            }
                        ?>      
                    </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Maximum Student Number*</label>
                        <div class="controls">
                        <input type="text" name="Student_Number" pattern="[0-9]+" class = "form-control" placeholder="e.g.80" required>
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