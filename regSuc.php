<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>registered</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  

    	  <link rel= "stylesheet" href = "style.css">
 
<?php 
session_start() ; 

?>
  	
</head>

<body>
  <!-- top nav bar -->
  
  <?php
include 'includes/sidebar.html';
if ( isset( $_SESSION[ 'user_id' ] ) ) 
include 'includes/navbar.php';
else
include 'includes/navbar2.php';

?>
		 <!-- content -->


<!-- Display body section. -->
    <div class="container-fluid">

<!-- login form -->



<img style="margin-left:400px"src ='images/registered5.png'><br>

<div class="form-box">


<!-- soc media icons -->
<br><br>
	<div class="social-icons">
	<img src="images/fb.jpg" alt="">
		<img src="images/tw.png" alt="">
			<img src="images/ig.png" alt="">
</div>

    <form action="login_action.php" id="login"  method="post" class="input-group">
    <input type="text" class="input-field" name="email" size="50" placeholder="Email">
    <input type="password" class="input-field" name="pass" size="50" placeholder="Password">
		
	<input type="submit" style="margin-top:20px"class="login-btn" value="Login" >

</form>
<br><button class='reg-btn' style="margin-top:250px" >Forgot details?</button></div>
</div></div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
  


	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>