<?php include ('session.php');?>	
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
                <a class="navbar-brand" href="#	">Classroom</a>
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
                           
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Add Classroom
                            </button>
							
						
                        </h1>
						<?php include ('add_classroom_mode.php');?>
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Classroom Table</strong>
                                </div>
                                <thead>
                                    <tr>

                                        <th>Classroom no.</th>
                                        <th>Department</th>
                                        <th>Subject Title</th> <!-- description -->
                                        <th>No. of Seats</th>
                                        <th>Classroom Type</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <?php include('connect.php');
                                    //display the data of classroom from database
                                        $query = $conn -> query( "select * from classroom" ) ; 
                                        $r = $query -> fetchAll( PDO::FETCH_ASSOC ) ;
                                        foreach( $r as $data ):
                                    ?>
                                        <tr class="warning"> 
                                            <td><?php echo $data['classroom_no'] ?></td>
                                            <td><?php echo $data['classroom_dept'] ?></td>
                                            <td><?php echo $data['classroom_desc'] ?></td>
                                            <td><?php echo $data['classroom_no_seat'] ?></td>
                                            <td><?php echo $data['classroom_type'] ?></td>
                                            <td width="160" >
                                                <!-- <h1><?php echo $data['classroomid'] ?></h1> -->
                                                <a value = "<?php echo $data['classroomid'] ?>" onclick="delete_classroom(this);" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                                <a value = "<?php echo $data['classroomid'] ?>" onclick="edit_classroom(this);" class="btn btn-success" role="botton"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
                                            </td>
                                    </tr>
                                    <?php endforeach;
                                    //end of display
                                    ?>

                                <?php ?>
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
    <script>
        function delete_classroom(elem)
        {
            var classroom_id = ( elem.getAttribute( 'value' ) ).toString() ; 
            document.cookie='delete_classroom_id='+classroom_id; 
            if( confirm('Are you sure to delete this classroom?\n') )
                location.href='delete_classroom_database.php';
            else{
                location.herf = "forclassroom.php" ; 
            }
        }

        function edit_classroom(elem)
        {
            var classroom_id = ( elem.getAttribute('value') ).toString() ; 
            document.cookie = "classroom_id = " + classroom_id ; 
            location.href = "edit_classroom.php" ; 
        }
    </script>
</body>

</html>
