<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>my sales</title>
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
	<h1>Paperweights I am selling</h1>
	    


<?php 
	$user_id = $_SESSION ['user_id'];
#include 'scripts/sortBy.php';
#require 'scripts/productDisplay.php';
require ( 'connect_db.php' ) ;


{
    $q = "SELECT * FROM shop WHERE seller_id=$user_id" ;
}


$r = mysqli_query( $dbc, $q ) ;


if ( mysqli_num_rows( $r ) > 0 )
{


    while ( $row = mysqli_fetch_array( $r,MYSQLI_ASSOC ))
    {
        extract($row);
        echo "    <div class='container2' >

  <div class='col'><div class ='card2' > 
  

  
        <a href='detail.php?id=$item_id'>
        <img  class='img-display' src= '$item_img'/></a>
		
     		<a href='detail.php?id=$item_id'>        
        <br>$item_name
        <br>$style</a>     
		

   <br> <br>
		
		
		<b>&pound;$item_price</b>
 <a href='editsale.php?id=$item_id' class='add-btn'>edit</a>

</div></div></div>"

        ;
    }

    mysqli_close( $dbc ) ;
}

else {
    echo
        "<div class = 'center4'><img src='images/noproducts.png'></div>
        
        <div class = 'center5'><a href='xxx.php' class='button'>Back to shop</a>
        </div>"
    ; }

?>

</div>
</div>

    	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  

	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>