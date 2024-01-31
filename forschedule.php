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
                <a class="navbar-brand" href="#	">Class Schedule</a>
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
                            <form action="add_schedule.php" method="post">
                                <button type="submit" class="btn btn-primary btn-lg" name="add_schedule_submit">
                                    Add Schedule
                                </button>
                            </form>
                            <br></br>
                
                            <div class="alert alert-info">
                            <strong><i class="icon-user icon-large"></i>&nbsp;Schedule Table</strong>
                            </div>
                            <table class="table table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th>table</th>
										<th>Action</th>                                      
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="table_semester.php" target="_blank">
                                                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#room">
                                                    課程表
                                                </button>	
                                            </a>
                                        </td>
										<td>
                                            <button class="btn btn-success btn-lg" onclick="ToEditLink()">
                                                edit
                                            </button>
                                        </td>                                      
                                    </tr>
                                    <tr>
                                        <td>
                                        <a href="table_pre1.php" target="_blank">
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#room">
                                            歷史課表1
                                        </button>	
                                        </a>
                                        </td>
										<td>

                                        </td>                                      
                                    </tr>
                                    <tr>
                                        <td>
                                        <a href="table_pre2.php" target="_blank">
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#room">
                                        歷史課表2
                                        </button>	
                                        </a>
                                        </td>
										<td>

                                        </td>                                      
                                    </tr>
                                    <tr>
                                        <td>
                                        <a href="table_pre3.php" target="_blank">
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#room">
                                        歷史課表3
                                        </button>	
                                        </a>
                                        </td>
										<td>

                                        </td>                                      
                                    </tr>
                                    <tr>
                                        <td>
                                        <a href="table_pre4.php" target="_blank">
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#room">
                                        歷史課表4
                                        </button>	
                                        </a>
                                        </td>
										<td>

                                        </td>                                      
                                    </tr>
                                    
                                    
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
    function ToEditLink() {
        // 跳轉到指定的連結
        window.location.href = 'edit_table_semester.php';
    }
    </script>
    
</body>

</html>
