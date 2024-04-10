<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php"; ?>
<div class="modal fade" id="modal_edit_subject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">  
                <div class="alert alert-info"><strong><center>Edit Subject</center></strong></div>
            </div>
            <!-- body -->
            <div class="modal-body">
                <!-- form -->
                <?php include ('connect.php');
                            // get data from database
                                $id = $_COOKIE['subject_id'] ; 
                                $sql = 'select * from subject where id = ' . $id . ';' ; 
                                $query = $conn -> query($sql) ; 
                                $cur = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                                if( !$cur ) echo "<script> location.href = 'forsubject.php' ; </script>" ; 
                            ?>
                            <form  method="post" enctype="multipart/form-data" action="edit_subject_database.php"> <hr>			
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Course Name</label>
                                    <input type="text" name="name" class = "form-control" pattern="[^'\\\x22;]*" value="<?php echo $cur['name'] ?>" required>       
                                </div>
                                        
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Course Number</label>
                                    <div class="controls">
                                        <input type="text" class = "form-control" pattern="[^'\\\x22;]*" name="number" value="<?php echo $cur['number']; ?>" required>
                                    </div>
                                </div>
                                        
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Credit   ***   An integer in [0, 9]   ***</label>
                                        <div class="controls">
                                            <input type="text" name="credit" pattern="[0-9]+[.]*[0-9]*" class = "form-control" value="<?php echo $cur['credit'] ;?>" required>
                                        </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Period(hr)   ***   an integer in [0, 9]   ***</label>
                                    <div class="controls">
                                    <input type="text" name="period" pattern = "[0-9]" class = "form-control" value="<?php echo $cur['period'] ;?>" required>
                                    </div>              
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Semester( 1A:一上 ; 1B:一下 ; 2A:二上 ; 2B:二下 ; 3A:三上 ; 3B:三下 ; 4A:四上 ; 4B:四下 )</label>
                                    <div class="controls">
                                    <input type="text" name="semester" pattern="[1234][AB]" class = "form-control" value="<?php echo $cur['semester'] ;?>" required>
                                    </div>              
                                </div>
                            
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Group Type   ***   Local Group:1;   International Group:0   ***</label>
                                    <div class="controls">
                                    <input type="text" name="groupType" pattern="[01]" class = "form-control" value="<?php if( $cur['groupType'] == 'International Group' ) echo 0 ; else if( $cur['groupType'] == 'Local Group' ) echo 1 ; else echo $cur['groupType'] ;?>" required>
                                    </div>              
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Class Type   ***   1:必(Required)/0:選(elective) or 支援外系   ***</label>
                                    <div class="controls">
                                    <input type="text" name="classType" pattern="[01]*" class = "form-control" value="<?php if( $cur['classType'] == '選(elective) or 支援外系' ) echo 0 ; else if( $cur['classType'] == '必(required)' ) echo 1 ; else echo $cur['classType'] ;?>" required>
                                    </div>              
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Remarks</label>
                                    <div class="controls">
                                    <input type="text" name="remarks" pattern="[^'\\\x22;]*" class = "form-control" value="<?php echo $cur['remarks'] ?>">
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