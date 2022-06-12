<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>help</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  

    	  <link rel= "stylesheet" href = "style.css">
		  
		  <body>
    <!-- top banner -->	 
<?php 
session_start() ; 
include 'includes/sidebar.html';

if ( isset( $_SESSION[ 'user_id' ] ) ) 
include 'includes/navbar.php';
else
include 'includes/navbar2.php';

?>
    <!-- content -->	
	
<div class='column2' ><div class='containerPage'>

This will be the help page
<h2 style="color:white">
Lorem ipsum dolor sit amet. Et doloribus blanditiis sed magnam aliquid quo nostrum quasi qui esse enim aut inventore similique. 
Sed internos voluptas ex exercitationem suscipit eum numquam pariatur. Sit ipsam voluptatibus qui sunt fuga ut dolorum neque ut 
exercitationem laboriosam in labore voluptatum est sapiente voluptatibus id libero quam! Non harum fugiat qui quasi ipsam qui omnis consequuntur.

At eaque quae nam consequatur mollitia cum voluptatem nisi est nihil fuga non fugiat reprehenderit. Rem soluta nostrum in dolores 
nesciunt rem optio nisi rem ducimus porro eos laboriosam dolorum qui minima sint ut illo explicabo.

Qui provident quibusdam 33 necessitatibus deleniti ut quas porro et expedita porro beatae eaque est earum culpa sed quia minus. Ut 
recusandae galisum qui omnis quia sed natus facere et alias alias et porro molestiae. Sit galisum sint sed facere accusamus et laboriosam 
nisi et atque commodi quo sapiente repellat At debitis beatae! Ut vero voluptatibus sit quia aliquid est dicta nemo.

 Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
 quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in 
 voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h2>




</div></div>
    <!-- footer script -->	
    	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>
