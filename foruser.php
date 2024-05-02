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
                <a class="navbar-brand" href="#	">User Account</a>
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
                              Add User
                            </button>
							
						
                        </h1>
						<?php include ('add_user_mode.php');?>
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;User Account Table</strong>
                                </div>
                                <thead>
                                    <tr>

                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Account</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <?php include('connect.php');
                                    //display the data of subjects from database
                                        $query = $conn -> query( "select * from users" ) ; 
                                        $r = $query -> fetchAll( PDO::FETCH_ASSOC ) ;
                                        foreach( $r as $data ):
                                    ?>
                                        <tr class="warning"> 
                                            <td><?php echo $data['name'] ?></td>
                                            <td><?php echo $data['department'] ?></td>
                                            <td><?php echo $data['account'] ?></td>

                                            <td width="160">
                                                <!-- <h1><?php echo $data['userid'] ?></h1> --> 
                                                <span <?php if( $data['userid'] == 1 ) echo " hidden " ; ?>> 
                                                    <a value = "<?php echo $data['userid'] ?>" onclick="delete_user(this);" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                                </span>    
                                                    <a value = "<?php echo $data['userid'] ?>" onclick="edit_user(this);" class="btn btn-success" role="botton"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
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
        function delete_user(elem)
        {
            var user_id = ( elem.getAttribute( 'value' ) ).toString() ; 
            //document.cookie='delete_user_id='+user_id; 
            var exp = new Date() ; 
            exp.setTime( exp.getTime() + 1000 * 10 ) ; 
            exp = exp.toString() ; 
            document.cookie='delete_user_id='+user_id+';expires=' + exp + ';path=/;' ; 
            if( confirm('Are you sure to delete this user?\n') )
                location.href='delete_user_database.php';
            else{
                //alert('deletion is canceled') ; 
                location.herf = "foruser.php" ; 
            }
        }

        function edit_user(elem)
        {
            var user_id = ( elem.getAttribute('value') ).toString() ; 
            var exp = new Date() ; 
            exp.setTime( exp.getTime() + 1000 * 600 ) ; 
            exp = exp.toString() ; 
            document.cookie='userid='+user_id+';expires=' + exp + ';path=/;' ; /******** the cookie index 'user_id' is unavailable******* */
            console.log( document.cookie ) ; 
            location.href = "pre_edit_user.php" ;
        }
    </script>
</body>

</html>
