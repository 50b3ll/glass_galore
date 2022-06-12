<!DOCTYPE html>
<html lang="en">
<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  

    	  <link rel= "stylesheet" href = "style.css">
   
</head>

<body> 

 <?php 
session_start() ; 

include 'includes/sidebar.html';

if ( isset( $_SESSION[ 'user_id' ] ) ) 
include 'includes/navbar.php';
else
include 'includes/navbar2.php';

?>

<div class="container-fluid">

  
<div id="SectionName" > 	
<h2 class='text-center'>Registration</h2>
<a href="register4.php" button class='reg-btn'style="margin-left:800px" >Back to login</button>

   <div class="form-box2"> 	 
<?php	
   {
    echo
    '<h5><p id="err_msg"> The following error(s) occurred:</h5><br>' ;
    foreach ( $errors as $msg )
    {
        echo
        " $msg" ; 
		
		} 
echo '';		



    # Close database connection.
    mysqli_close( $dbc );
  } 
 
?>

 
 

<form action="register.php" method="post">
    <b>Please complete the form</b>
 
        <input type="text"class="input-field"  name="first_name" size="25" placeholder="First name"
               pattern="[A-Za-z].{2,}"
           value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"></p>
  
        <input type="text" class="input-field" name="last_name" size="25" placeholder="Last name"
               pattern="[A-Za-z].{2,}"
           value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"></p>
		   
		   			<span style="color:">This is how you will appear to other users     </span>   
		<input type="text" class="input-field" name="username" size="10" placeholder="Username"            
           value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"></p>

        <input type="text" class="input-field" name="email" size="50"placeholder="Email address"
               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
           value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"></p>

        <span style="color:red">Password must be min 8 characters and contain 1 number and 1 uppercase letter     </span>
        <input type="password" class="input-field" name="pass1" size="20" placeholder="Password"
               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" ></p>

    <p>Confirm Password:
        <input type="password" class="input-field" name="pass2" size="20" placeholder="Password"
             value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>"></p>


<p><input type="submit" onclick="showReg()" class="login-btn" value="Register"></p>
</form></div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
  


	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>