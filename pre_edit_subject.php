<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php include ('header.php');?>	
<link href="img/ndhu1.png" rel="icon" type="image"> 

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#	">Subject</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      						
					  Welcome : Admin
                    </a>
                  
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
       <?php include ('nav_sidebar3.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#add_subject">
                              Add Subject
                            </button>
						
                        </h1>
						<?php include ('add_subject_mode.php');?>
                        
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Subject Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Number</th>
										<th>Credit</th>
										<th>Period</th>
                                        <th>Semester</th>
                                        <th>Group Type</th>
                                        <th>Class Type</th>
                                        <th>Remarks</th>
                                        <th>Program</th>
                                        <th>Action</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <?php include('connect.php');
                                    //display the data of subjects from database
                                        $query = $conn -> query( "select * from subject" ) ; 
                                        $r = $query -> fetchAll( PDO::FETCH_ASSOC ) ;
                                        foreach( $r as $data ):
                                    ?>
                                        <tr class="warning"> 
                                            <td><?php echo $data['name'] ?></td>
                                            <td><?php echo $data['number'] ?></td>
                                            <td><?php echo $data['credit'] ?></td>
                                            <td><?php echo $data['period'] ?></td>    
                                            <td><?php echo $data['semester'] ?></td>   
                                            <td><?php echo $data['groupType'] == 1 ? 'Local Group': 'International Group'  ?></td>    
                                            <td><?php echo $data['classType'] == 1 ? '必(required)' : '選(elective) or 支援外系' ?></td>
                                            <td><?php echo $data['remarks'] ?></td>
                                            <td><?php echo $data['program'] ?></td>
                                            <td width="160" >
                                                <!-- <h1><?php echo $data['id'] ?></h1> -->
                                                <a value = "<?php echo $data['id'] ?>" onclick="delete_subject(this);" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                                <a value = "<?php echo $data['id'] ?>" onclick="edit_subject(this);" class="btn btn-success" role="botton"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
                                            </td>
                                    </tr>
                                    <?php  endforeach;
                                    //end of display
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
                
				
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
   <?php include ('script.php');?>
   <?php include "edit_subject_mode.php" ; ?>
    <script>
        $("#modal_edit_subject").modal("show") ; 
        $("#modal_edit_subject").on("hidden.bs.modal",
            function()
            {
                location.href = "forsubject.php" ; 
            }
        ) ;
    </script>
</body>

</html>
