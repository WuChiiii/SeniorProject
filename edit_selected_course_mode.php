<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<div class="modal fade" id="modal_edit_course" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">  
                <div class="alert alert-info"><strong><center>Edit Course</center></strong></div>
            </div>
            <!-- body -->
            <div class="modal-body">
                <!-- form -->
                <?php
                    include "connect.php" ;
                    $id = $_COOKIE['course_id'] ; 
                    //var_dump( $id ) ; 
                    $sql = "select * from course_selection where id = " . $id . ";" ; 
                    $query = $conn -> query( $sql ) ; 
                    $cur = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                    if( !$cur ) echo "<script> location.href = 'prof_my_selection.php' ; </script>" ; 
                ?>
                <strong>* indicates required</strong>
                <form  method="post" enctype="multipart/form-data" action="edit_course_database.php"> <hr>			
				    <div class="control-group">
                        <label class="control-label" for="inputEmail">Course Name*</label>
                        <input type="text" name="SCourse_Name" class = "form-control" pattern="[^'\\\x22;]*" value="<?php echo $cur['courseName'] ?>" required>       
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Course Number</label>
                        <div class="controls">
                            <input type="text" class = "form-control" pattern="[^'\\\x22;]*" name="SCourse_Number" value="<?php echo $cur['courseNumber']; ?>">
                        </div>
                    </div>
                               
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Credit<br>(An integer in [0, 9])</label>
                            <div class="controls">
                                <input type="text" name="SCredit" pattern="[0-9]+[.]*[0-9]*" class = "form-control" value="<?php echo $cur['credit'] ;?>" >
                            </div>
                    </div>

					<div class="control-group">
                        <label class="control-label" for="inputPassword">Period(hr)*<br>(an integer in [0, 9])</label>
                        <div class="controls">
                        <input type="text" name="SPeriod" pattern = "[0-9]" class = "form-control" value="<?php echo $cur['period'] ;?>" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Semester*<br>( 1A:一上 ; 1B:一下 ; 2A:二上 ; 2B:二下 ; 3A:三上 ; 3B:三下 ; 4A:四上 ; 4B:四下 )</label>
                        <div class="controls">
                        <input type="text" name="SSemester" pattern="[1234][AB]" class = "form-control" value="<?php echo $cur['semester'] ;?>" required>
                        </div>              
                     </div>
                
                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Group Type*<br>(Local Group:1;International Group:0)</label>
                        <div class="controls">
                        <input type="text" name="SGroup_Type" pattern="[01]" class = "form-control" value="<?php if( $cur['groupType'] == 'International Group' ) echo 0 ; else if( $cur['groupType'] == 'Local Group' ) echo 1 ; else echo $cur['groupType'] ;?>" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Class Type*<br>(1:必(Required);0:選(elective) or 支援外系)</label>
                        <div class="controls">
                        <input type="text" name="SClass_Type" pattern="[01]*" class = "form-control" value="<?php if( $cur['classType'] == '選(elective) or 支援外系' ) echo 0 ; else if( $cur['classType'] == '必(required)' ) echo 1 ; else echo $cur['classType'] ;?>" required>
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Remarks</label>
                        <div class="controls">
                        <input type="text" name="SRemarks" pattern="[^'\\\x22;]*" class = "form-control" value="<?php echo $cur['remarks'] ?>">
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">Program</label>
                        <div class="controls">
                        <input type="text" name="SProgram" pattern="[^'\\\x22;]*" class = "form-control" value="<?php echo $cur['program'] ?>">
                        </div>              
                     </div>

                     <div class="control-group">
                        <label class="control-label" for="inputPassword">ClassroomType*<br>(General Classroom:0;Computer Classroom:1;Specific Classroom:2)</label>
                        <div class="controls">
                        <input type="text" name="SClassroom_Type" pattern="[012]" class = "form-control" value="<?php echo $cur['classroomType'] ;?>" required>
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
                                echo '<select name=SClassroom class="form-control">';
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
                        <input type="text" name="SStudent_Number" pattern="[0-9]+" class = "form-control" value="<?php echo $cur['studentNumber'] ?>" required>
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