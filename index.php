<!DOCTYPE html>
<link href="img/ndhu1.png" rel="icon" type="image"> 
<head><style>
body{
background:-webkit-linear-gradient(right, #e1e6e1, #e1e6e1);
}
a{
color: white;
text-decoration:none;
font-size:20px;
}
a:hover{
background-color:#cce5ff;
color:white;
}
#frm{
width:1350px;
background-color:white;
height:25px;
}

#myBtn{
margin-top:50px;
height:60px;
width:150px;

background-image:url("img/newb.png");

}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 30%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

.modal-header {
    padding: 2px 16px;
    background:-webkit-linear-gradient(right, #00254A, #00254A); /**login box */
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background:-webkit-linear-gradient(right, #00254A ,#00254A); /**login box */
    color: white;
}

#mission p {
margin-left:20px;
text-align:justify;
}
#vision p {
margin-left:20px;
text-align:justify;
}
#mission{
float:left;
margin-top:20px;
position:inherit;
display:inline-block;
width:48%;
height:200px;
background-color:#e1e6e1;
border:1px solid;
}
#vision{
float:right;
margin-top:20px;
width:48%;
height:200px;
position:inherit;
display: inline-block;
background-color:#e1e6e1;
border:1px solid;
}
footer {
margin-top:300px;
}
</style></head>

<body>


<img src="img/a2.jpg" alt="Slideshow Image Script" title="Slideshow Image Script" name="slide" border=0 width=100% height=200>


<center>

<!-- The Modal -->
<div id="myModal" class="">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <h2>LOGIN</h2>
	  <a href="index3.php">ADMIN</a>
      <a> / </a>
	  <a href="index.php">CSIE</a>
    </div>
    <div class="modal-body">
	<form action="#" method="POST" style="background-color:white;">
     <center>

		
		<!-- <Select name="username" style="margin-bottom:10px;">
		
		<option value="CSIE">TEST</option>
	
	````</select> -->
<br/>
<input type="username" name="username" placeholder="Username" /><br />
<input type="password" name="password" placeholder="Password" /><br />

<input type="submit" name="go" value="Log In">

</center>
<?php
							include('connect.php');
                            session_start();
                            if (ini_get("session.use_cookies")) {
                                $params = session_get_cookie_params();
                                setcookie(session_name(), '', time() - 42000,
                                    $params["path"], $params["domain"],
                                    $params["secure"], $params["httponly"]
                                );
                            }
                            session_destroy() ; 

							if(isset($_POST['go']))
							{
							
							$username=$_POST['username'];
							$password=$_POST['password'];
							
								
								$result = $conn -> query("SELECT * FROM users WHERE department like '%ADMIN%' and username ='$username' AND password = '$password'") or die(mysqli_error());
								$row = $result -> fetch( PDO::FETCH_OBJ);
								$numberOfRows = $result -> rowCount();	
						
																	
																
																if ($numberOfRows == 0) 
																	{
																		echo " <br><center><font color= 'red' size='3'>Please fill up the fields correctly</center></font>";
																	} 
																else if ($numberOfRows > 0)
																	{
																	session_start() ; 
																	$_SESSION['id'] = ((array)$row)['userid'];
                                                                    header("location:home.php");
															}
							}
							?>
</form>


    </div>
    <div class="modal-footer">
      <h3>NDHU Schedulling System</h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}


</script>


</center>
</div>
</body>

</html>

