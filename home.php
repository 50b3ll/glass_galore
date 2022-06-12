<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>Glass Galore home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  

    	  <link rel= "stylesheet" href = ".css">
	<style>
/* top banner, body, navbar, footer */

.banner{
	background-color:  white; 
	width: 100%; 
		}

body {
	margin:0;
	width: 100%;
    background-color:  #fbfdff;
	font-family: sans-serif;
	}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  margin:0;
	}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: black;
	}

ul {
    list-style-type: none;
    padding: 0;
    overflow: hidden;
    background-color:  #415058;
    width: 100%;
    font-family: sans-serif;
    }

.footer{
        margin-top:150px;
        margin-bottom:150px;
  margin-left: -200px;

        justify-content: space-between;
        color: #37474F;
        font-weight:bold;

  font-size: 12px;
        }

/* main container */

#viewport {
  padding-left: 250px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

/* Sidebar*/

#sidebar .nav{
    background: #37474F;
	display: inline-block;
}

#sidebar {
  z-index: 1000;
  position: absolute;
  margin-top: 8px;
  width: 250px;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #37474F;
  transition: all 0.5s ease;
}

#sidebar header {
  font-size: 20px;
  line-height: 59px;
  text-align: center;  
  color:white;
}

#sidebar .nav a{
  background: none;
  text-decoration: none;
  color: white;
  display: inline-block;
  font-size: 16px;
  padding:  16px 24px;
}

#sidebar .nav a:hover{
  background: none;
  color: black;
}

/* content columns*/

* {
  box-sizing: border-box;
}

.column {
  float: left;
  padding: 10px;
}

.left {
  width: 70%;
}

.right {
  width: 30%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* cards for sale*/

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%; 
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}


img.displayed {
    display: block;
    margin-left: auto;
    margin-right: auto }
	

	</style>
</head>

<body>


<?php 
session_start() ; 

include 'includes/sidebar.html';

$page_title = 'Home' ;
if ( isset( $_SESSION[ 'user_id' ] ) ) 
include 'includes/navbar.php';
else
include 'includes/navbar2.php';



?>


	 <!-- content -->
	
    <div class="container-fluid">
      <h1 style="margin-left: 250px">Welcome to Glass Galore</h1>

 <!-- left column -->

<div class="row">
  <div class="column left" style="background-color:#aaa;">
		<div class="card">
  <div class="container">
  
   <!-- login confirmation -->
<?php
if ( isset( $_SESSION[ 'user_id' ] ) ) 
echo "You are now logged in as <i> {$_SESSION['first_name']} {$_SESSION['last_name']}</i>  
";
?>

		<!-- column 1 row 1 -->
 <h6> <br>Browse our wiki of paperweights<a href='wiki_home.php' > HERE</a>
</h6>
  </div>
</div>
<br>

		<!-- collumn 1 row 2 -->
		<div class="card">

	<div class="container">
		<a href='productslist.php'>	
		<img src='images/home2.png' style="width:88%" alt="" > 
		</a>

  </div>
</div>
<br>
	
  </div>
  
  <!-- right column -->
  
  <div class="column right" style="background-color:#aaa;">
	  
	  <!-- ad one -->
	<div class="card">		<a href='productslist.php'>	
  <img class="displayed" src="images/holder.jpg" alt="" style="width:170px"></a>
  <div class="container">
     <center>   <h4><b>paperweight 1</b></h4> 
    <p>blah blah</p> 	</center>
  </div>
</div>
<br>

	  <!-- ad two -->	
	<div class="card">		<a href='productslist.php'>	
  <img class="displayed" src="images/holder.jpg" alt="" style="width:170px"></a>
  <div class="container">
     <center>   <h4><b>paperweight 2</b></h4> 
    <p>blah blah</p> 	</center>
  </div>
</div>
<br>
	  <!-- ad three -->
	<div class="card">		<a href='productslist.php'>	
  <img class="displayed" src="images/holder.jpg" alt="" style="width:170px"></a>
  <div class="container">
     <center>   <h4><b>paperweight 3</b></h4> 
    <p>blah blah</p> 	</center>
  </div>
</div>

	
  </div>	  <!-- close column -->
</div>	  <!-- close row -->
</div> <!-- close container -->





  	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>