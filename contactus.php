<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>template</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
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

  <div class="container">
<div class="row">
  <div class="column left" style="background-color:#aaa; ">
		<div class="card" >

	<div class="card-group container"> 
	</div>
	
	<div id='map' style='width: 600px; height: 450px;'></div>

	<div id="controls">
		<button onclick="geoFindMe()">Show my location</button>
		<div id="out"></div>
	</div>
		
    <div id="map"></div>
		
			  <div class="card">
	  
</div></div></div>

  <div class="column right" style="background-color:#aaa;">
	  
	<div class="card" style="height:490px; padding:50px;">
<h4>
Glass Galore<br>
University of Hertfordshire<br>
College Ln, <br>
Hatfield <br>
AL10 9AB
<br>
Phone: 02089505114<br>
<a href='mailto:nightsky@nightsky.com'>Email: glassgalore@gmail.com</a>
</h4>

</div>
				  
	</div>			  
		</div></div>



	</div>
  	<div class="footer" style="margin-left:400px"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
  <!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
	
		<script src="scripts/mapfunc.js"></script>
	
</body>
