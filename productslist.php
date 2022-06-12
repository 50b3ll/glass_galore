<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>paperweights for sale</title>
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

   <!-- column -->
  <div class="column2" >  
  	<div class="containerPage">
	<h1>Paperweights for Sale</h1>
	    <div class=""style="float: right">
        <form action="productslist.php"method="POST">
            <input type="text" placeholder="Search products.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form></div>
<?php
$example="";
if (isset($_POST['sortChooser'])) $example=$_POST['sortChooser'];
?>

<form action="productslist.php" method="POST">
    <div class="sortspace">
    <select name="sortChooser">
        <option <?php if (isset($example) && $example=="prices high to low") echo "selected";?> >prices high to low</option>
        <option <?php if (isset($example) && $example=="prices low to high") echo "selected";?> >prices low to high</option>
        <option <?php if (isset($example) && $example=="name a-z") echo "selected";?> >name a-z</option>
        <option <?php if (isset($example) && $example=="name z-a") echo "selected";?> >name z-a</option>
    </select>
    <input type ="submit"   value="sort"/>
</form>
</div>

<?php 

include 'scripts/sortBy.php';
require 'scripts/productDisplay.php';

?>

</div>
</div>

    	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  

	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>