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
                <a class="navbar-brand" href="#	">Teacher</a>
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
                              Add Teacher
                            </button>
							
						
                        </h1>
						<?php include ('add_teacher_mode.php');?>
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Teacher Table</strong>
                                </div>
                                <thead>
                                    <tr>

                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Position</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <?php include('connect.php');
                                    //display the data of subjects from database
                                        $query = $conn -> query( "select * from teachers" ) ; 
                                        $r = $query -> fetchAll( PDO::FETCH_ASSOC ) ;
                                        foreach( $r as $data ):
                                    ?>
                                        <tr class="warning"> 
                                            <td><?php echo $data['teacher_name'] ?></td>
                                            <td><?php echo $data['teacher_email'] ?></td>
                                            <td><?php echo $data['teacher_position'] ?></td>
                                            <td><?php echo $data['teacher_department'] ?></td>    
                                            <td width="160" >
                                                <!-- <h1><?php echo $data['teacherid'] ?></h1> -->
                                                <a value = "<?php echo $data['teacherid'] ?>" onclick="delete_teacher(this);" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                                <a value = "<?php echo $data['teacherid'] ?>" onclick="edit_teacher(this);" class="btn btn-success" role="botton"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>

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
        function delete_teacher(elem)
        {
            var teacher_id = ( elem.getAttribute( 'value' ) ).toString() ; 
            //document.cookie='delete_teacher_id='+teacher_id; 
            var exp = new Date() ; 
            exp.setTime( exp.getTime() + 1000 * 10 ) ; 
            exp = exp.toString() ; 
            document.cookie='delete_teacher_id='+teacher_id+';expires=' + exp + ';path=/;' ; 
            if( confirm('Are you sure to delete this teacher?\n') )
                location.href='delete_teacher_database.php';
            else{
                //alert('deletion is canceled') ; 
                location.herf = "forteacher.php" ; 
            }
        }

        function edit_teacher(elem)
        {
            var teacher_id = ( elem.getAttribute('value') ).toString() ;
            //document.cookie = 'teacher_id='+teacher_id ; 
            var exp = new Date() ; 
            exp.setTime( exp.getTime() + 1000 * 10 ) ; 
            exp = exp.toString() ; 
            document.cookie='teacher_id='+teacher_id+';expires=' + exp + ';path=/;' ; 
            location.href = "edit_teacher.php" ;
        }
    </script>
</body>

</html>
